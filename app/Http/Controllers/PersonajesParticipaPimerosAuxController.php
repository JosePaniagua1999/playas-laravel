<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonajesParticipaPimerosAuxRequest;
use App\Http\Requests\UpdatePersonajesParticipaPimerosAuxRequest;
use App\Repositories\PersonajesParticipaPimerosAuxRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersonajesParticipaPimerosAuxController extends AppBaseController
{
    /** @var  PersonajesParticipaPimerosAuxRepository */
    private $personajesParticipaPimerosAuxRepository;

    public function __construct(PersonajesParticipaPimerosAuxRepository $personajesParticipaPimerosAuxRepo)
    {
        $this->personajesParticipaPimerosAuxRepository = $personajesParticipaPimerosAuxRepo;
    }

    /**
     * Display a listing of the PersonajesParticipaPimerosAux.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->personajesParticipaPimerosAuxRepository->pushCriteria(new RequestCriteria($request));
        $personajesParticipaPimerosAuxes = $this->personajesParticipaPimerosAuxRepository->all();

        return view('personajes_participa_pimeros_auxes.index')
            ->with('personajesParticipaPimerosAuxes', $personajesParticipaPimerosAuxes);
    }

    /**
     * Show the form for creating a new PersonajesParticipaPimerosAux.
     *
     * @return Response
     */
    public function create()
    {
        return view('personajes_participa_pimeros_auxes.create');
    }

    /**
     * Store a newly created PersonajesParticipaPimerosAux in storage.
     *
     * @param CreatePersonajesParticipaPimerosAuxRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonajesParticipaPimerosAuxRequest $request)
    {
        $input = $request->all();

        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->create($input);

        Flash::success('Personajes Participa Pimeros Aux saved successfully.');

        return redirect(route('personajesParticipaPimerosAuxes.index'));
    }

    /**
     * Display the specified PersonajesParticipaPimerosAux.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesParticipaPimerosAux)) {
            Flash::error('Personajes Participa Pimeros Aux not found');

            return redirect(route('personajesParticipaPimerosAuxes.index'));
        }

        return view('personajes_participa_pimeros_auxes.show')->with('personajesParticipaPimerosAux', $personajesParticipaPimerosAux);
    }

    /**
     * Show the form for editing the specified PersonajesParticipaPimerosAux.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesParticipaPimerosAux)) {
            Flash::error('Personajes Participa Pimeros Aux not found');

            return redirect(route('personajesParticipaPimerosAuxes.index'));
        }

        return view('personajes_participa_pimeros_auxes.edit')->with('personajesParticipaPimerosAux', $personajesParticipaPimerosAux);
    }

    /**
     * Update the specified PersonajesParticipaPimerosAux in storage.
     *
     * @param  int              $id
     * @param UpdatePersonajesParticipaPimerosAuxRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonajesParticipaPimerosAuxRequest $request)
    {
        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesParticipaPimerosAux)) {
            Flash::error('Personajes Participa Pimeros Aux not found');

            return redirect(route('personajesParticipaPimerosAuxes.index'));
        }

        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->update($request->all(), $id);

        Flash::success('Personajes Participa Pimeros Aux updated successfully.');

        return redirect(route('personajesParticipaPimerosAuxes.index'));
    }

    /**
     * Remove the specified PersonajesParticipaPimerosAux from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personajesParticipaPimerosAux = $this->personajesParticipaPimerosAuxRepository->findWithoutFail($id);

        if (empty($personajesParticipaPimerosAux)) {
            Flash::error('Personajes Participa Pimeros Aux not found');

            return redirect(route('personajesParticipaPimerosAuxes.index'));
        }

        $this->personajesParticipaPimerosAuxRepository->delete($id);

        Flash::success('Personajes Participa Pimeros Aux deleted successfully.');

        return redirect(route('personajesParticipaPimerosAuxes.index'));
    }
}
