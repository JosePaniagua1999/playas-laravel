<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonajesIniciaPrimerosAuxRequest;
use App\Http\Requests\UpdatePersonajesIniciaPrimerosAuxRequest;
use App\Repositories\PersonajesIniciaPrimerosAuxRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersonajesIniciaPrimerosAuxController extends AppBaseController
{
    /** @var  PersonajesIniciaPrimerosAuxRepository */
    private $personajesIniciaPrimerosAuxRepository;

    public function __construct(PersonajesIniciaPrimerosAuxRepository $personajesIniciaPrimerosAuxRepo)
    {
        $this->personajesIniciaPrimerosAuxRepository = $personajesIniciaPrimerosAuxRepo;
    }

    /**
     * Display a listing of the PersonajesIniciaPrimerosAux.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->personajesIniciaPrimerosAuxRepository->pushCriteria(new RequestCriteria($request));
        $personajesIniciaPrimerosAuxes = $this->personajesIniciaPrimerosAuxRepository->all();

        return view('personajes_inicia_primeros_auxes.index')
            ->with('personajesIniciaPrimerosAuxes', $personajesIniciaPrimerosAuxes);
    }

    /**
     * Show the form for creating a new PersonajesIniciaPrimerosAux.
     *
     * @return Response
     */
    public function create()
    {
        return view('personajes_inicia_primeros_auxes.create');
    }

    /**
     * Store a newly created PersonajesIniciaPrimerosAux in storage.
     *
     * @param CreatePersonajesIniciaPrimerosAuxRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonajesIniciaPrimerosAuxRequest $request)
    {
        $input = $request->all();

        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->create($input);

        Flash::success('Personajes Inicia Primeros Aux saved successfully.');

        return redirect(route('personajesIniciaPrimerosAuxes.index'));
    }

    /**
     * Display the specified PersonajesIniciaPrimerosAux.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesIniciaPrimerosAux)) {
            Flash::error('Personajes Inicia Primeros Aux not found');

            return redirect(route('personajesIniciaPrimerosAuxes.index'));
        }

        return view('personajes_inicia_primeros_auxes.show')->with('personajesIniciaPrimerosAux', $personajesIniciaPrimerosAux);
    }

    /**
     * Show the form for editing the specified PersonajesIniciaPrimerosAux.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesIniciaPrimerosAux)) {
            Flash::error('Personajes Inicia Primeros Aux not found');

            return redirect(route('personajesIniciaPrimerosAuxes.index'));
        }

        return view('personajes_inicia_primeros_auxes.edit')->with('personajesIniciaPrimerosAux', $personajesIniciaPrimerosAux);
    }

    /**
     * Update the specified PersonajesIniciaPrimerosAux in storage.
     *
     * @param  int              $id
     * @param UpdatePersonajesIniciaPrimerosAuxRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonajesIniciaPrimerosAuxRequest $request)
    {
        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesIniciaPrimerosAux)) {
            Flash::error('Personajes Inicia Primeros Aux not found');

            return redirect(route('personajesIniciaPrimerosAuxes.index'));
        }

        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->update($request->all(), $id);

        Flash::success('Personajes Inicia Primeros Aux updated successfully.');

        return redirect(route('personajesIniciaPrimerosAuxes.index'));
    }

    /**
     * Remove the specified PersonajesIniciaPrimerosAux from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personajesIniciaPrimerosAux = $this->personajesIniciaPrimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesIniciaPrimerosAux)) {
            Flash::error('Personajes Inicia Primeros Aux not found');

            return redirect(route('personajesIniciaPrimerosAuxes.index'));
        }

        $this->personajesIniciaPrimerosAuxRepository->delete($id);

        Flash::success('Personajes Inicia Primeros Aux deleted successfully.');

        return redirect(route('personajesIniciaPrimerosAuxes.index'));
    }
}
