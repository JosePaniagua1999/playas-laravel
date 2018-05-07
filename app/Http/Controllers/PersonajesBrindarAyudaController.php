<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonajesBrindarAyudaRequest;
use App\Http\Requests\UpdatePersonajesBrindarAyudaRequest;
use App\Repositories\PersonajesBrindarAyudaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersonajesBrindarAyudaController extends AppBaseController
{
    /** @var  PersonajesBrindarAyudaRepository */
    private $personajesBrindarAyudaRepository;

    public function __construct(PersonajesBrindarAyudaRepository $personajesBrindarAyudaRepo)
    {
        $this->personajesBrindarAyudaRepository = $personajesBrindarAyudaRepo;
    }

    /**
     * Display a listing of the PersonajesBrindarAyuda.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->personajesBrindarAyudaRepository->pushCriteria(new RequestCriteria($request));
        $personajesBrindarAyudas = $this->personajesBrindarAyudaRepository->all();

        return view('personajes_brindar_ayudas.index')
            ->with('personajesBrindarAyudas', $personajesBrindarAyudas);
    }

    /**
     * Show the form for creating a new PersonajesBrindarAyuda.
     *
     * @return Response
     */
    public function create()
    {
        return view('personajes_brindar_ayudas.create');
    }

    /**
     * Store a newly created PersonajesBrindarAyuda in storage.
     *
     * @param CreatePersonajesBrindarAyudaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonajesBrindarAyudaRequest $request)
    {
        $input = $request->all();

        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->create($input);

        Flash::success('Personajes Brindar Ayuda saved successfully.');

        return redirect(route('personajesBrindarAyudas.index'));
    }

    /**
     * Display the specified PersonajesBrindarAyuda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->findWithoutFail($id);

        if (empty($personajesBrindarAyuda)) {
            Flash::error('Personajes Brindar Ayuda not found');

            return redirect(route('personajesBrindarAyudas.index'));
        }

        return view('personajes_brindar_ayudas.show')->with('personajesBrindarAyuda', $personajesBrindarAyuda);
    }

    /**
     * Show the form for editing the specified PersonajesBrindarAyuda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->findWithoutFail($id);

        if (empty($personajesBrindarAyuda)) {
            Flash::error('Personajes Brindar Ayuda not found');

            return redirect(route('personajesBrindarAyudas.index'));
        }

        return view('personajes_brindar_ayudas.edit')->with('personajesBrindarAyuda', $personajesBrindarAyuda);
    }

    /**
     * Update the specified PersonajesBrindarAyuda in storage.
     *
     * @param  int              $id
     * @param UpdatePersonajesBrindarAyudaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonajesBrindarAyudaRequest $request)
    {
        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->findWithoutFail($id);

        if (empty($personajesBrindarAyuda)) {
            Flash::error('Personajes Brindar Ayuda not found');

            return redirect(route('personajesBrindarAyudas.index'));
        }

        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->update($request->all(), $id);

        Flash::success('Personajes Brindar Ayuda updated successfully.');

        return redirect(route('personajesBrindarAyudas.index'));
    }

    /**
     * Remove the specified PersonajesBrindarAyuda from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personajesBrindarAyuda = $this->personajesBrindarAyudaRepository->findWithoutFail($id);

        if (empty($personajesBrindarAyuda)) {
            Flash::error('Personajes Brindar Ayuda not found');

            return redirect(route('personajesBrindarAyudas.index'));
        }

        $this->personajesBrindarAyudaRepository->delete($id);

        Flash::success('Personajes Brindar Ayuda deleted successfully.');

        return redirect(route('personajesBrindarAyudas.index'));
    }
}
