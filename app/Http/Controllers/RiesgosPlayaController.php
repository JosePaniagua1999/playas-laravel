<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRiesgosPlayaRequest;
use App\Http\Requests\UpdateRiesgosPlayaRequest;
use App\Repositories\RiesgosPlayaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RiesgosPlayaController extends AppBaseController
{
    /** @var  RiesgosPlayaRepository */
    private $riesgosPlayaRepository;

    public function __construct(RiesgosPlayaRepository $riesgosPlayaRepo)
    {
        $this->riesgosPlayaRepository = $riesgosPlayaRepo;
    }

    /**
     * Display a listing of the RiesgosPlaya.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->riesgosPlayaRepository->pushCriteria(new RequestCriteria($request));
        $riesgosPlayas = $this->riesgosPlayaRepository->all();

        return view('riesgos_playas.index')
            ->with('riesgosPlayas', $riesgosPlayas);
    }

    /**
     * Show the form for creating a new RiesgosPlaya.
     *
     * @return Response
     */
    public function create()
    {
        return view('riesgos_playas.create');
    }

    /**
     * Store a newly created RiesgosPlaya in storage.
     *
     * @param CreateRiesgosPlayaRequest $request
     *
     * @return Response
     */
    public function store(CreateRiesgosPlayaRequest $request)
    {
        $input = $request->all();

        $riesgosPlaya = $this->riesgosPlayaRepository->create($input);

        Flash::success('Riesgos Playa saved successfully.');

        return redirect(route('riesgosPlayas.index'));
    }

    /**
     * Display the specified RiesgosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riesgosPlaya = $this->riesgosPlayaRepository->findWithoutFail($id);

        if (empty($riesgosPlaya)) {
            Flash::error('Riesgos Playa not found');

            return redirect(route('riesgosPlayas.index'));
        }

        return view('riesgos_playas.show')->with('riesgosPlaya', $riesgosPlaya);
    }

    /**
     * Show the form for editing the specified RiesgosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riesgosPlaya = $this->riesgosPlayaRepository->findWithoutFail($id);

        if (empty($riesgosPlaya)) {
            Flash::error('Riesgos Playa not found');

            return redirect(route('riesgosPlayas.index'));
        }

        return view('riesgos_playas.edit')->with('riesgosPlaya', $riesgosPlaya);
    }

    /**
     * Update the specified RiesgosPlaya in storage.
     *
     * @param  int              $id
     * @param UpdateRiesgosPlayaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRiesgosPlayaRequest $request)
    {
        $riesgosPlaya = $this->riesgosPlayaRepository->findWithoutFail($id);

        if (empty($riesgosPlaya)) {
            Flash::error('Riesgos Playa not found');

            return redirect(route('riesgosPlayas.index'));
        }

        $riesgosPlaya = $this->riesgosPlayaRepository->update($request->all(), $id);

        Flash::success('Riesgos Playa updated successfully.');

        return redirect(route('riesgosPlayas.index'));
    }

    /**
     * Remove the specified RiesgosPlaya from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riesgosPlaya = $this->riesgosPlayaRepository->findWithoutFail($id);

        if (empty($riesgosPlaya)) {
            Flash::error('Riesgos Playa not found');

            return redirect(route('riesgosPlayas.index'));
        }

        $this->riesgosPlayaRepository->delete($id);

        Flash::success('Riesgos Playa deleted successfully.');

        return redirect(route('riesgosPlayas.index'));
    }
}
