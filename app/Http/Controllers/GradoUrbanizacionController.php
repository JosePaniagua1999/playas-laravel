<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGradoUrbanizacionRequest;
use App\Http\Requests\UpdateGradoUrbanizacionRequest;
use App\Repositories\GradoUrbanizacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GradoUrbanizacionController extends AppBaseController
{
    /** @var  GradoUrbanizacionRepository */
    private $gradoUrbanizacionRepository;

    public function __construct(GradoUrbanizacionRepository $gradoUrbanizacionRepo)
    {
        $this->gradoUrbanizacionRepository = $gradoUrbanizacionRepo;
    }

    /**
     * Display a listing of the GradoUrbanizacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gradoUrbanizacionRepository->pushCriteria(new RequestCriteria($request));
        $gradoUrbanizacions = $this->gradoUrbanizacionRepository->all();

        return view('grado_urbanizacions.index')
            ->with('gradoUrbanizacions', $gradoUrbanizacions);
    }

    /**
     * Show the form for creating a new GradoUrbanizacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('grado_urbanizacions.create');
    }

    /**
     * Store a newly created GradoUrbanizacion in storage.
     *
     * @param CreateGradoUrbanizacionRequest $request
     *
     * @return Response
     */
    public function store(CreateGradoUrbanizacionRequest $request)
    {
        $input = $request->all();

        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->create($input);

        Flash::success('Grado Urbanizacion saved successfully.');

        return redirect(route('gradoUrbanizacions.index'));
    }

    /**
     * Display the specified GradoUrbanizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->findWithoutFail($id);

        if (empty($gradoUrbanizacion)) {
            Flash::error('Grado Urbanizacion not found');

            return redirect(route('gradoUrbanizacions.index'));
        }

        return view('grado_urbanizacions.show')->with('gradoUrbanizacion', $gradoUrbanizacion);
    }

    /**
     * Show the form for editing the specified GradoUrbanizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->findWithoutFail($id);

        if (empty($gradoUrbanizacion)) {
            Flash::error('Grado Urbanizacion not found');

            return redirect(route('gradoUrbanizacions.index'));
        }

        return view('grado_urbanizacions.edit')->with('gradoUrbanizacion', $gradoUrbanizacion);
    }

    /**
     * Update the specified GradoUrbanizacion in storage.
     *
     * @param  int              $id
     * @param UpdateGradoUrbanizacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGradoUrbanizacionRequest $request)
    {
        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->findWithoutFail($id);

        if (empty($gradoUrbanizacion)) {
            Flash::error('Grado Urbanizacion not found');

            return redirect(route('gradoUrbanizacions.index'));
        }

        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->update($request->all(), $id);

        Flash::success('Grado Urbanizacion updated successfully.');

        return redirect(route('gradoUrbanizacions.index'));
    }

    /**
     * Remove the specified GradoUrbanizacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gradoUrbanizacion = $this->gradoUrbanizacionRepository->findWithoutFail($id);

        if (empty($gradoUrbanizacion)) {
            Flash::error('Grado Urbanizacion not found');

            return redirect(route('gradoUrbanizacions.index'));
        }

        $this->gradoUrbanizacionRepository->delete($id);

        Flash::success('Grado Urbanizacion deleted successfully.');

        return redirect(route('gradoUrbanizacions.index'));
    }
}
