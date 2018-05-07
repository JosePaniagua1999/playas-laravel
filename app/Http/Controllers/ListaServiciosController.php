<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListaServiciosRequest;
use App\Http\Requests\UpdateListaServiciosRequest;
use App\Repositories\ListaServiciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ListaServiciosController extends AppBaseController
{
    /** @var  ListaServiciosRepository */
    private $listaServiciosRepository;

    public function __construct(ListaServiciosRepository $listaServiciosRepo)
    {
        $this->listaServiciosRepository = $listaServiciosRepo;
    }

    /**
     * Display a listing of the ListaServicios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->listaServiciosRepository->pushCriteria(new RequestCriteria($request));
        $listaServicios = $this->listaServiciosRepository->all();

        return view('lista_servicios.index')
            ->with('listaServicios', $listaServicios);
    }

    /**
     * Show the form for creating a new ListaServicios.
     *
     * @return Response
     */
    public function create()
    {
        return view('lista_servicios.create');
    }

    /**
     * Store a newly created ListaServicios in storage.
     *
     * @param CreateListaServiciosRequest $request
     *
     * @return Response
     */
    public function store(CreateListaServiciosRequest $request)
    {
        $input = $request->all();

        $listaServicios = $this->listaServiciosRepository->create($input);

        Flash::success('Lista Servicios saved successfully.');

        return redirect(route('listaServicios.index'));
    }

    /**
     * Display the specified ListaServicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $listaServicios = $this->listaServiciosRepository->findWithoutFail($id);

        if (empty($listaServicios)) {
            Flash::error('Lista Servicios not found');

            return redirect(route('listaServicios.index'));
        }

        return view('lista_servicios.show')->with('listaServicios', $listaServicios);
    }

    /**
     * Show the form for editing the specified ListaServicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $listaServicios = $this->listaServiciosRepository->findWithoutFail($id);

        if (empty($listaServicios)) {
            Flash::error('Lista Servicios not found');

            return redirect(route('listaServicios.index'));
        }

        return view('lista_servicios.edit')->with('listaServicios', $listaServicios);
    }

    /**
     * Update the specified ListaServicios in storage.
     *
     * @param  int              $id
     * @param UpdateListaServiciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateListaServiciosRequest $request)
    {
        $listaServicios = $this->listaServiciosRepository->findWithoutFail($id);

        if (empty($listaServicios)) {
            Flash::error('Lista Servicios not found');

            return redirect(route('listaServicios.index'));
        }

        $listaServicios = $this->listaServiciosRepository->update($request->all(), $id);

        Flash::success('Lista Servicios updated successfully.');

        return redirect(route('listaServicios.index'));
    }

    /**
     * Remove the specified ListaServicios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $listaServicios = $this->listaServiciosRepository->findWithoutFail($id);

        if (empty($listaServicios)) {
            Flash::error('Lista Servicios not found');

            return redirect(route('listaServicios.index'));
        }

        $this->listaServiciosRepository->delete($id);

        Flash::success('Lista Servicios deleted successfully.');

        return redirect(route('listaServicios.index'));
    }
}
