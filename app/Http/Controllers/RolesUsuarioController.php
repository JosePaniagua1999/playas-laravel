<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRolesUsuarioRequest;
use App\Http\Requests\UpdateRolesUsuarioRequest;
use App\Repositories\RolesUsuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RolesUsuarioController extends AppBaseController
{
    /** @var  RolesUsuarioRepository */
    private $rolesUsuarioRepository;

    public function __construct(RolesUsuarioRepository $rolesUsuarioRepo)
    {
        $this->rolesUsuarioRepository = $rolesUsuarioRepo;
    }

    /**
     * Display a listing of the RolesUsuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rolesUsuarioRepository->pushCriteria(new RequestCriteria($request));
        $rolesUsuarios = $this->rolesUsuarioRepository->all();

        return view('roles_usuarios.index')
            ->with('rolesUsuarios', $rolesUsuarios);
    }

    /**
     * Show the form for creating a new RolesUsuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('roles_usuarios.create');
    }

    /**
     * Store a newly created RolesUsuario in storage.
     *
     * @param CreateRolesUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateRolesUsuarioRequest $request)
    {
        $input = $request->all();

        $rolesUsuario = $this->rolesUsuarioRepository->create($input);

        Flash::success('Roles Usuario saved successfully.');

        return redirect(route('rolesUsuarios.index'));
    }

    /**
     * Display the specified RolesUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rolesUsuario = $this->rolesUsuarioRepository->findWithoutFail($id);

        if (empty($rolesUsuario)) {
            Flash::error('Roles Usuario not found');

            return redirect(route('rolesUsuarios.index'));
        }

        return view('roles_usuarios.show')->with('rolesUsuario', $rolesUsuario);
    }

    /**
     * Show the form for editing the specified RolesUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rolesUsuario = $this->rolesUsuarioRepository->findWithoutFail($id);

        if (empty($rolesUsuario)) {
            Flash::error('Roles Usuario not found');

            return redirect(route('rolesUsuarios.index'));
        }

        return view('roles_usuarios.edit')->with('rolesUsuario', $rolesUsuario);
    }

    /**
     * Update the specified RolesUsuario in storage.
     *
     * @param  int              $id
     * @param UpdateRolesUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRolesUsuarioRequest $request)
    {
        $rolesUsuario = $this->rolesUsuarioRepository->findWithoutFail($id);

        if (empty($rolesUsuario)) {
            Flash::error('Roles Usuario not found');

            return redirect(route('rolesUsuarios.index'));
        }

        $rolesUsuario = $this->rolesUsuarioRepository->update($request->all(), $id);

        Flash::success('Roles Usuario updated successfully.');

        return redirect(route('rolesUsuarios.index'));
    }

    /**
     * Remove the specified RolesUsuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rolesUsuario = $this->rolesUsuarioRepository->findWithoutFail($id);

        if (empty($rolesUsuario)) {
            Flash::error('Roles Usuario not found');

            return redirect(route('rolesUsuarios.index'));
        }

        $this->rolesUsuarioRepository->delete($id);

        Flash::success('Roles Usuario deleted successfully.');

        return redirect(route('rolesUsuarios.index'));
    }
}
