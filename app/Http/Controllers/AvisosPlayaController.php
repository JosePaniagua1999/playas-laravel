<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvisosPlayaRequest;
use App\Http\Requests\UpdateAvisosPlayaRequest;
use App\Repositories\AvisosPlayaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AvisosPlayaController extends AppBaseController
{
    /** @var  AvisosPlayaRepository */
    private $avisosPlayaRepository;

    public function __construct(AvisosPlayaRepository $avisosPlayaRepo)
    {
        $this->avisosPlayaRepository = $avisosPlayaRepo;
    }

    /**
     * Display a listing of the AvisosPlaya.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->avisosPlayaRepository->pushCriteria(new RequestCriteria($request));
        $avisosPlayas = $this->avisosPlayaRepository->all();

        return view('avisos_playas.index')
            ->with('avisosPlayas', $avisosPlayas);
    }

    /**
     * Show the form for creating a new AvisosPlaya.
     *
     * @return Response
     */
    public function create()
    {
        return view('avisos_playas.create');
    }

    /**
     * Store a newly created AvisosPlaya in storage.
     *
     * @param CreateAvisosPlayaRequest $request
     *
     * @return Response
     */
    public function store(CreateAvisosPlayaRequest $request)
    {
        $input = $request->all();

        $avisosPlaya = $this->avisosPlayaRepository->create($input);

        Flash::success('Avisos Playa saved successfully.');

        return redirect(route('avisosPlayas.index'));
    }

    /**
     * Display the specified AvisosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avisosPlaya = $this->avisosPlayaRepository->findWithoutFail($id);

        if (empty($avisosPlaya)) {
            Flash::error('Avisos Playa not found');

            return redirect(route('avisosPlayas.index'));
        }

        return view('avisos_playas.show')->with('avisosPlaya', $avisosPlaya);
    }

    /**
     * Show the form for editing the specified AvisosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avisosPlaya = $this->avisosPlayaRepository->findWithoutFail($id);

        if (empty($avisosPlaya)) {
            Flash::error('Avisos Playa not found');

            return redirect(route('avisosPlayas.index'));
        }

        return view('avisos_playas.edit')->with('avisosPlaya', $avisosPlaya);
    }

    /**
     * Update the specified AvisosPlaya in storage.
     *
     * @param  int              $id
     * @param UpdateAvisosPlayaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvisosPlayaRequest $request)
    {
        $avisosPlaya = $this->avisosPlayaRepository->findWithoutFail($id);

        if (empty($avisosPlaya)) {
            Flash::error('Avisos Playa not found');

            return redirect(route('avisosPlayas.index'));
        }

        $avisosPlaya = $this->avisosPlayaRepository->update($request->all(), $id);

        Flash::success('Avisos Playa updated successfully.');

        return redirect(route('avisosPlayas.index'));
    }

    /**
     * Remove the specified AvisosPlaya from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avisosPlaya = $this->avisosPlayaRepository->findWithoutFail($id);

        if (empty($avisosPlaya)) {
            Flash::error('Avisos Playa not found');

            return redirect(route('avisosPlayas.index'));
        }

        $this->avisosPlayaRepository->delete($id);

        Flash::success('Avisos Playa deleted successfully.');

        return redirect(route('avisosPlayas.index'));
    }
}
