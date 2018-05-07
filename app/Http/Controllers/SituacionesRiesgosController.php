<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSituacionesRiesgosRequest;
use App\Http\Requests\UpdateSituacionesRiesgosRequest;
use App\Repositories\SituacionesRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SituacionesRiesgosController extends AppBaseController
{
    /** @var  SituacionesRiesgosRepository */
    private $situacionesRiesgosRepository;

    public function __construct(SituacionesRiesgosRepository $situacionesRiesgosRepo)
    {
        $this->situacionesRiesgosRepository = $situacionesRiesgosRepo;
    }

    /**
     * Display a listing of the SituacionesRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->situacionesRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $situacionesRiesgos = $this->situacionesRiesgosRepository->all();

        return view('situaciones_riesgos.index')
            ->with('situacionesRiesgos', $situacionesRiesgos);
    }

    /**
     * Show the form for creating a new SituacionesRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('situaciones_riesgos.create');
    }

    /**
     * Store a newly created SituacionesRiesgos in storage.
     *
     * @param CreateSituacionesRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreateSituacionesRiesgosRequest $request)
    {
        $input = $request->all();

        $situacionesRiesgos = $this->situacionesRiesgosRepository->create($input);

        Flash::success('Situaciones Riesgos saved successfully.');

        return redirect(route('situacionesRiesgos.index'));
    }

    /**
     * Display the specified SituacionesRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $situacionesRiesgos = $this->situacionesRiesgosRepository->findWithoutFail($id);

        if (empty($situacionesRiesgos)) {
            Flash::error('Situaciones Riesgos not found');

            return redirect(route('situacionesRiesgos.index'));
        }

        return view('situaciones_riesgos.show')->with('situacionesRiesgos', $situacionesRiesgos);
    }

    /**
     * Show the form for editing the specified SituacionesRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $situacionesRiesgos = $this->situacionesRiesgosRepository->findWithoutFail($id);

        if (empty($situacionesRiesgos)) {
            Flash::error('Situaciones Riesgos not found');

            return redirect(route('situacionesRiesgos.index'));
        }

        return view('situaciones_riesgos.edit')->with('situacionesRiesgos', $situacionesRiesgos);
    }

    /**
     * Update the specified SituacionesRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdateSituacionesRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSituacionesRiesgosRequest $request)
    {
        $situacionesRiesgos = $this->situacionesRiesgosRepository->findWithoutFail($id);

        if (empty($situacionesRiesgos)) {
            Flash::error('Situaciones Riesgos not found');

            return redirect(route('situacionesRiesgos.index'));
        }

        $situacionesRiesgos = $this->situacionesRiesgosRepository->update($request->all(), $id);

        Flash::success('Situaciones Riesgos updated successfully.');

        return redirect(route('situacionesRiesgos.index'));
    }

    /**
     * Remove the specified SituacionesRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $situacionesRiesgos = $this->situacionesRiesgosRepository->findWithoutFail($id);

        if (empty($situacionesRiesgos)) {
            Flash::error('Situaciones Riesgos not found');

            return redirect(route('situacionesRiesgos.index'));
        }

        $this->situacionesRiesgosRepository->delete($id);

        Flash::success('Situaciones Riesgos deleted successfully.');

        return redirect(route('situacionesRiesgos.index'));
    }
}
