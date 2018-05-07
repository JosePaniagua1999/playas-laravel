<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipologiaRiesgosRequest;
use App\Http\Requests\UpdateTipologiaRiesgosRequest;
use App\Repositories\TipologiaRiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipologiaRiesgosController extends AppBaseController
{
    /** @var  TipologiaRiesgosRepository */
    private $tipologiaRiesgosRepository;

    public function __construct(TipologiaRiesgosRepository $tipologiaRiesgosRepo)
    {
        $this->tipologiaRiesgosRepository = $tipologiaRiesgosRepo;
    }

    /**
     * Display a listing of the TipologiaRiesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipologiaRiesgosRepository->pushCriteria(new RequestCriteria($request));
        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->all();

        return view('tipologia_riesgos.index')
            ->with('tipologiaRiesgos', $tipologiaRiesgos);
    }

    /**
     * Show the form for creating a new TipologiaRiesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipologia_riesgos.create');
    }

    /**
     * Store a newly created TipologiaRiesgos in storage.
     *
     * @param CreateTipologiaRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipologiaRiesgosRequest $request)
    {
        $input = $request->all();

        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->create($input);

        Flash::success('Tipologia Riesgos saved successfully.');

        return redirect(route('tipologiaRiesgos.index'));
    }

    /**
     * Display the specified TipologiaRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->findWithoutFail($id);

        if (empty($tipologiaRiesgos)) {
            Flash::error('Tipologia Riesgos not found');

            return redirect(route('tipologiaRiesgos.index'));
        }

        return view('tipologia_riesgos.show')->with('tipologiaRiesgos', $tipologiaRiesgos);
    }

    /**
     * Show the form for editing the specified TipologiaRiesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->findWithoutFail($id);

        if (empty($tipologiaRiesgos)) {
            Flash::error('Tipologia Riesgos not found');

            return redirect(route('tipologiaRiesgos.index'));
        }

        return view('tipologia_riesgos.edit')->with('tipologiaRiesgos', $tipologiaRiesgos);
    }

    /**
     * Update the specified TipologiaRiesgos in storage.
     *
     * @param  int              $id
     * @param UpdateTipologiaRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipologiaRiesgosRequest $request)
    {
        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->findWithoutFail($id);

        if (empty($tipologiaRiesgos)) {
            Flash::error('Tipologia Riesgos not found');

            return redirect(route('tipologiaRiesgos.index'));
        }

        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->update($request->all(), $id);

        Flash::success('Tipologia Riesgos updated successfully.');

        return redirect(route('tipologiaRiesgos.index'));
    }

    /**
     * Remove the specified TipologiaRiesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipologiaRiesgos = $this->tipologiaRiesgosRepository->findWithoutFail($id);

        if (empty($tipologiaRiesgos)) {
            Flash::error('Tipologia Riesgos not found');

            return redirect(route('tipologiaRiesgos.index'));
        }

        $this->tipologiaRiesgosRepository->delete($id);

        Flash::success('Tipologia Riesgos deleted successfully.');

        return redirect(route('tipologiaRiesgos.index'));
    }
}
