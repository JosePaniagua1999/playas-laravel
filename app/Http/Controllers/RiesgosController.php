<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRiesgosRequest;
use App\Http\Requests\UpdateRiesgosRequest;
use App\Repositories\RiesgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RiesgosController extends AppBaseController
{
    /** @var  RiesgosRepository */
    private $riesgosRepository;

    public function __construct(RiesgosRepository $riesgosRepo)
    {
        $this->riesgosRepository = $riesgosRepo;
    }

    /**
     * Display a listing of the Riesgos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->riesgosRepository->pushCriteria(new RequestCriteria($request));
        $riesgos = $this->riesgosRepository->all();

        return view('riesgos.index')
            ->with('riesgos', $riesgos);
    }

    /**
     * Show the form for creating a new Riesgos.
     *
     * @return Response
     */
    public function create()
    {
        return view('riesgos.create');
    }

    /**
     * Store a newly created Riesgos in storage.
     *
     * @param CreateRiesgosRequest $request
     *
     * @return Response
     */
    public function store(CreateRiesgosRequest $request)
    {
        $input = $request->all();

        $riesgos = $this->riesgosRepository->create($input);

        Flash::success('Riesgos saved successfully.');

        return redirect(route('riesgos.index'));
    }

    /**
     * Display the specified Riesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riesgos = $this->riesgosRepository->findWithoutFail($id);

        if (empty($riesgos)) {
            Flash::error('Riesgos not found');

            return redirect(route('riesgos.index'));
        }

        return view('riesgos.show')->with('riesgos', $riesgos);
    }

    /**
     * Show the form for editing the specified Riesgos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riesgos = $this->riesgosRepository->findWithoutFail($id);

        if (empty($riesgos)) {
            Flash::error('Riesgos not found');

            return redirect(route('riesgos.index'));
        }

        return view('riesgos.edit')->with('riesgos', $riesgos);
    }

    /**
     * Update the specified Riesgos in storage.
     *
     * @param  int              $id
     * @param UpdateRiesgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRiesgosRequest $request)
    {
        $riesgos = $this->riesgosRepository->findWithoutFail($id);

        if (empty($riesgos)) {
            Flash::error('Riesgos not found');

            return redirect(route('riesgos.index'));
        }

        $riesgos = $this->riesgosRepository->update($request->all(), $id);

        Flash::success('Riesgos updated successfully.');

        return redirect(route('riesgos.index'));
    }

    /**
     * Remove the specified Riesgos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riesgos = $this->riesgosRepository->findWithoutFail($id);

        if (empty($riesgos)) {
            Flash::error('Riesgos not found');

            return redirect(route('riesgos.index'));
        }

        $this->riesgosRepository->delete($id);

        Flash::success('Riesgos deleted successfully.');

        return redirect(route('riesgos.index'));
    }
}
