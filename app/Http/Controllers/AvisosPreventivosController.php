<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvisosPreventivosRequest;
use App\Http\Requests\UpdateAvisosPreventivosRequest;
use App\Repositories\AvisosPreventivosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AvisosPreventivosController extends AppBaseController
{
    /** @var  AvisosPreventivosRepository */
    private $avisosPreventivosRepository;

    public function __construct(AvisosPreventivosRepository $avisosPreventivosRepo)
    {
        $this->avisosPreventivosRepository = $avisosPreventivosRepo;
    }

    /**
     * Display a listing of the AvisosPreventivos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->avisosPreventivosRepository->pushCriteria(new RequestCriteria($request));
        $avisosPreventivos = $this->avisosPreventivosRepository->all();

        return view('avisos_preventivos.index')
            ->with('avisosPreventivos', $avisosPreventivos);
    }

    /**
     * Show the form for creating a new AvisosPreventivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('avisos_preventivos.create');
    }

    /**
     * Store a newly created AvisosPreventivos in storage.
     *
     * @param CreateAvisosPreventivosRequest $request
     *
     * @return Response
     */
    public function store(CreateAvisosPreventivosRequest $request)
    {
        $input = $request->all();

        $avisosPreventivos = $this->avisosPreventivosRepository->create($input);

        Flash::success('Avisos Preventivos saved successfully.');

        return redirect(route('avisosPreventivos.index'));
    }

    /**
     * Display the specified AvisosPreventivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avisosPreventivos = $this->avisosPreventivosRepository->findWithoutFail($id);

        if (empty($avisosPreventivos)) {
            Flash::error('Avisos Preventivos not found');

            return redirect(route('avisosPreventivos.index'));
        }

        return view('avisos_preventivos.show')->with('avisosPreventivos', $avisosPreventivos);
    }

    /**
     * Show the form for editing the specified AvisosPreventivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avisosPreventivos = $this->avisosPreventivosRepository->findWithoutFail($id);

        if (empty($avisosPreventivos)) {
            Flash::error('Avisos Preventivos not found');

            return redirect(route('avisosPreventivos.index'));
        }

        return view('avisos_preventivos.edit')->with('avisosPreventivos', $avisosPreventivos);
    }

    /**
     * Update the specified AvisosPreventivos in storage.
     *
     * @param  int              $id
     * @param UpdateAvisosPreventivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvisosPreventivosRequest $request)
    {
        $avisosPreventivos = $this->avisosPreventivosRepository->findWithoutFail($id);

        if (empty($avisosPreventivos)) {
            Flash::error('Avisos Preventivos not found');

            return redirect(route('avisosPreventivos.index'));
        }

        $avisosPreventivos = $this->avisosPreventivosRepository->update($request->all(), $id);

        Flash::success('Avisos Preventivos updated successfully.');

        return redirect(route('avisosPreventivos.index'));
    }

    /**
     * Remove the specified AvisosPreventivos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avisosPreventivos = $this->avisosPreventivosRepository->findWithoutFail($id);

        if (empty($avisosPreventivos)) {
            Flash::error('Avisos Preventivos not found');

            return redirect(route('avisosPreventivos.index'));
        }

        $this->avisosPreventivosRepository->delete($id);

        Flash::success('Avisos Preventivos deleted successfully.');

        return redirect(route('avisosPreventivos.index'));
    }
}
