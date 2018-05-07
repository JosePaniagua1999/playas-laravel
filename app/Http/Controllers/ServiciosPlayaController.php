<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiciosPlayaRequest;
use App\Http\Requests\UpdateServiciosPlayaRequest;
use App\Repositories\ServiciosPlayaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServiciosPlayaController extends AppBaseController
{
    /** @var  ServiciosPlayaRepository */
    private $serviciosPlayaRepository;

    public function __construct(ServiciosPlayaRepository $serviciosPlayaRepo)
    {
        $this->serviciosPlayaRepository = $serviciosPlayaRepo;
    }

    /**
     * Display a listing of the ServiciosPlaya.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviciosPlayaRepository->pushCriteria(new RequestCriteria($request));
        $serviciosPlayas = $this->serviciosPlayaRepository->all();

        return view('servicios_playas.index')
            ->with('serviciosPlayas', $serviciosPlayas);
    }

    /**
     * Show the form for creating a new ServiciosPlaya.
     *
     * @return Response
     */
    public function create()
    {
        return view('servicios_playas.create');
    }

    /**
     * Store a newly created ServiciosPlaya in storage.
     *
     * @param CreateServiciosPlayaRequest $request
     *
     * @return Response
     */
    public function store(CreateServiciosPlayaRequest $request)
    {
        $input = $request->all();

        $serviciosPlaya = $this->serviciosPlayaRepository->create($input);

        Flash::success('Servicios Playa saved successfully.');

        return redirect(route('serviciosPlayas.index'));
    }

    /**
     * Display the specified ServiciosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviciosPlaya = $this->serviciosPlayaRepository->findWithoutFail($id);

        if (empty($serviciosPlaya)) {
            Flash::error('Servicios Playa not found');

            return redirect(route('serviciosPlayas.index'));
        }

        return view('servicios_playas.show')->with('serviciosPlaya', $serviciosPlaya);
    }

    /**
     * Show the form for editing the specified ServiciosPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviciosPlaya = $this->serviciosPlayaRepository->findWithoutFail($id);

        if (empty($serviciosPlaya)) {
            Flash::error('Servicios Playa not found');

            return redirect(route('serviciosPlayas.index'));
        }

        return view('servicios_playas.edit')->with('serviciosPlaya', $serviciosPlaya);
    }

    /**
     * Update the specified ServiciosPlaya in storage.
     *
     * @param  int              $id
     * @param UpdateServiciosPlayaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiciosPlayaRequest $request)
    {
        $serviciosPlaya = $this->serviciosPlayaRepository->findWithoutFail($id);

        if (empty($serviciosPlaya)) {
            Flash::error('Servicios Playa not found');

            return redirect(route('serviciosPlayas.index'));
        }

        $serviciosPlaya = $this->serviciosPlayaRepository->update($request->all(), $id);

        Flash::success('Servicios Playa updated successfully.');

        return redirect(route('serviciosPlayas.index'));
    }

    /**
     * Remove the specified ServiciosPlaya from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviciosPlaya = $this->serviciosPlayaRepository->findWithoutFail($id);

        if (empty($serviciosPlaya)) {
            Flash::error('Servicios Playa not found');

            return redirect(route('serviciosPlayas.index'));
        }

        $this->serviciosPlayaRepository->delete($id);

        Flash::success('Servicios Playa deleted successfully.');

        return redirect(route('serviciosPlayas.index'));
    }
}
