<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGradoOcupacionRequest;
use App\Http\Requests\UpdateGradoOcupacionRequest;
use App\Repositories\GradoOcupacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GradoOcupacionController extends AppBaseController
{
    /** @var  GradoOcupacionRepository */
    private $gradoOcupacionRepository;

    public function __construct(GradoOcupacionRepository $gradoOcupacionRepo)
    {
        $this->gradoOcupacionRepository = $gradoOcupacionRepo;
    }

    /**
     * Display a listing of the GradoOcupacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gradoOcupacionRepository->pushCriteria(new RequestCriteria($request));
        $gradoOcupacions = $this->gradoOcupacionRepository->all();

        return view('grado_ocupacions.index')
            ->with('gradoOcupacions', $gradoOcupacions);
    }

    /**
     * Show the form for creating a new GradoOcupacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('grado_ocupacions.create');
    }

    /**
     * Store a newly created GradoOcupacion in storage.
     *
     * @param CreateGradoOcupacionRequest $request
     *
     * @return Response
     */
    public function store(CreateGradoOcupacionRequest $request)
    {
        $input = $request->all();

        $gradoOcupacion = $this->gradoOcupacionRepository->create($input);

        Flash::success('Grado Ocupacion saved successfully.');

        return redirect(route('gradoOcupacions.index'));
    }

    /**
     * Display the specified GradoOcupacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gradoOcupacion = $this->gradoOcupacionRepository->findWithoutFail($id);

        if (empty($gradoOcupacion)) {
            Flash::error('Grado Ocupacion not found');

            return redirect(route('gradoOcupacions.index'));
        }

        return view('grado_ocupacions.show')->with('gradoOcupacion', $gradoOcupacion);
    }

    /**
     * Show the form for editing the specified GradoOcupacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gradoOcupacion = $this->gradoOcupacionRepository->findWithoutFail($id);

        if (empty($gradoOcupacion)) {
            Flash::error('Grado Ocupacion not found');

            return redirect(route('gradoOcupacions.index'));
        }

        return view('grado_ocupacions.edit')->with('gradoOcupacion', $gradoOcupacion);
    }

    /**
     * Update the specified GradoOcupacion in storage.
     *
     * @param  int              $id
     * @param UpdateGradoOcupacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGradoOcupacionRequest $request)
    {
        $gradoOcupacion = $this->gradoOcupacionRepository->findWithoutFail($id);

        if (empty($gradoOcupacion)) {
            Flash::error('Grado Ocupacion not found');

            return redirect(route('gradoOcupacions.index'));
        }

        $gradoOcupacion = $this->gradoOcupacionRepository->update($request->all(), $id);

        Flash::success('Grado Ocupacion updated successfully.');

        return redirect(route('gradoOcupacions.index'));
    }

    /**
     * Remove the specified GradoOcupacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gradoOcupacion = $this->gradoOcupacionRepository->findWithoutFail($id);

        if (empty($gradoOcupacion)) {
            Flash::error('Grado Ocupacion not found');

            return redirect(route('gradoOcupacions.index'));
        }

        $this->gradoOcupacionRepository->delete($id);

        Flash::success('Grado Ocupacion deleted successfully.');

        return redirect(route('gradoOcupacions.index'));
    }
}
