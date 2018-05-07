<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosPlayasRequest;
use App\Http\Requests\UpdateUsuariosPlayasRequest;
use App\Repositories\UsuariosPlayasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsuariosPlayasController extends AppBaseController
{
    /** @var  UsuariosPlayasRepository */
    private $usuariosPlayasRepository;

    public function __construct(UsuariosPlayasRepository $usuariosPlayasRepo)
    {
        $this->usuariosPlayasRepository = $usuariosPlayasRepo;
    }

    /**
     * Display a listing of the UsuariosPlayas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuariosPlayasRepository->pushCriteria(new RequestCriteria($request));
        $usuariosPlayas = $this->usuariosPlayasRepository->all();

        return view('usuarios_playas.index')
            ->with('usuariosPlayas', $usuariosPlayas);
    }

    /**
     * Show the form for creating a new UsuariosPlayas.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios_playas.create');
    }

    /**
     * Store a newly created UsuariosPlayas in storage.
     *
     * @param CreateUsuariosPlayasRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosPlayasRequest $request)
    {
        $input = $request->all();

        $usuariosPlayas = $this->usuariosPlayasRepository->create($input);

        Flash::success('Usuarios Playas saved successfully.');

        return redirect(route('usuariosPlayas.index'));
    }

    /**
     * Display the specified UsuariosPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuariosPlayas = $this->usuariosPlayasRepository->findWithoutFail($id);

        if (empty($usuariosPlayas)) {
            Flash::error('Usuarios Playas not found');

            return redirect(route('usuariosPlayas.index'));
        }

        return view('usuarios_playas.show')->with('usuariosPlayas', $usuariosPlayas);
    }

    /**
     * Show the form for editing the specified UsuariosPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuariosPlayas = $this->usuariosPlayasRepository->findWithoutFail($id);

        if (empty($usuariosPlayas)) {
            Flash::error('Usuarios Playas not found');

            return redirect(route('usuariosPlayas.index'));
        }

        return view('usuarios_playas.edit')->with('usuariosPlayas', $usuariosPlayas);
    }

    /**
     * Update the specified UsuariosPlayas in storage.
     *
     * @param  int              $id
     * @param UpdateUsuariosPlayasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosPlayasRequest $request)
    {
        $usuariosPlayas = $this->usuariosPlayasRepository->findWithoutFail($id);

        if (empty($usuariosPlayas)) {
            Flash::error('Usuarios Playas not found');

            return redirect(route('usuariosPlayas.index'));
        }

        $usuariosPlayas = $this->usuariosPlayasRepository->update($request->all(), $id);

        Flash::success('Usuarios Playas updated successfully.');

        return redirect(route('usuariosPlayas.index'));
    }

    /**
     * Remove the specified UsuariosPlayas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuariosPlayas = $this->usuariosPlayasRepository->findWithoutFail($id);

        if (empty($usuariosPlayas)) {
            Flash::error('Usuarios Playas not found');

            return redirect(route('usuariosPlayas.index'));
        }

        $this->usuariosPlayasRepository->delete($id);

        Flash::success('Usuarios Playas deleted successfully.');

        return redirect(route('usuariosPlayas.index'));
    }
}
