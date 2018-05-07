<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDireccionesRequest;
use App\Http\Requests\UpdateDireccionesRequest;
use App\Repositories\DireccionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DireccionesController extends AppBaseController
{
    /** @var  DireccionesRepository */
    private $direccionesRepository;

    public function __construct(DireccionesRepository $direccionesRepo)
    {
        $this->direccionesRepository = $direccionesRepo;
    }

    /**
     * Display a listing of the Direcciones.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->direccionesRepository->pushCriteria(new RequestCriteria($request));
        $direcciones = $this->direccionesRepository->all();

        return view('direcciones.index')
            ->with('direcciones', $direcciones);
    }

    /**
     * Show the form for creating a new Direcciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('direcciones.create');
    }

    /**
     * Store a newly created Direcciones in storage.
     *
     * @param CreateDireccionesRequest $request
     *
     * @return Response
     */
    public function store(CreateDireccionesRequest $request)
    {
        $input = $request->all();

        $direcciones = $this->direccionesRepository->create($input);

        Flash::success('Direcciones saved successfully.');

        return redirect(route('direcciones.index'));
    }

    /**
     * Display the specified Direcciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $direcciones = $this->direccionesRepository->findWithoutFail($id);

        if (empty($direcciones)) {
            Flash::error('Direcciones not found');

            return redirect(route('direcciones.index'));
        }

        return view('direcciones.show')->with('direcciones', $direcciones);
    }

    /**
     * Show the form for editing the specified Direcciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $direcciones = $this->direccionesRepository->findWithoutFail($id);

        if (empty($direcciones)) {
            Flash::error('Direcciones not found');

            return redirect(route('direcciones.index'));
        }

        return view('direcciones.edit')->with('direcciones', $direcciones);
    }

    /**
     * Update the specified Direcciones in storage.
     *
     * @param  int              $id
     * @param UpdateDireccionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDireccionesRequest $request)
    {
        $direcciones = $this->direccionesRepository->findWithoutFail($id);

        if (empty($direcciones)) {
            Flash::error('Direcciones not found');

            return redirect(route('direcciones.index'));
        }

        $direcciones = $this->direccionesRepository->update($request->all(), $id);

        Flash::success('Direcciones updated successfully.');

        return redirect(route('direcciones.index'));
    }

    /**
     * Remove the specified Direcciones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $direcciones = $this->direccionesRepository->findWithoutFail($id);

        if (empty($direcciones)) {
            Flash::error('Direcciones not found');

            return redirect(route('direcciones.index'));
        }

        $this->direccionesRepository->delete($id);

        Flash::success('Direcciones deleted successfully.');

        return redirect(route('direcciones.index'));
    }
}
