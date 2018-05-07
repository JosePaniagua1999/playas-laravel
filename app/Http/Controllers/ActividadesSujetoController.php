<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadesSujetoRequest;
use App\Http\Requests\UpdateActividadesSujetoRequest;
use App\Repositories\ActividadesSujetoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ActividadesSujetoController extends AppBaseController
{
    /** @var  ActividadesSujetoRepository */
    private $actividadesSujetoRepository;

    public function __construct(ActividadesSujetoRepository $actividadesSujetoRepo)
    {
        $this->actividadesSujetoRepository = $actividadesSujetoRepo;
    }

    /**
     * Display a listing of the ActividadesSujeto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->actividadesSujetoRepository->pushCriteria(new RequestCriteria($request));
        $actividadesSujetos = $this->actividadesSujetoRepository->all();

        return view('actividades_sujetos.index')
            ->with('actividadesSujetos', $actividadesSujetos);
    }

    /**
     * Show the form for creating a new ActividadesSujeto.
     *
     * @return Response
     */
    public function create()
    {
        return view('actividades_sujetos.create');
    }

    /**
     * Store a newly created ActividadesSujeto in storage.
     *
     * @param CreateActividadesSujetoRequest $request
     *
     * @return Response
     */
    public function store(CreateActividadesSujetoRequest $request)
    {
        $input = $request->all();

        $actividadesSujeto = $this->actividadesSujetoRepository->create($input);

        Flash::success('Actividades Sujeto saved successfully.');

        return redirect(route('actividadesSujetos.index'));
    }

    /**
     * Display the specified ActividadesSujeto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actividadesSujeto = $this->actividadesSujetoRepository->findWithoutFail($id);

        if (empty($actividadesSujeto)) {
            Flash::error('Actividades Sujeto not found');

            return redirect(route('actividadesSujetos.index'));
        }

        return view('actividades_sujetos.show')->with('actividadesSujeto', $actividadesSujeto);
    }

    /**
     * Show the form for editing the specified ActividadesSujeto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actividadesSujeto = $this->actividadesSujetoRepository->findWithoutFail($id);

        if (empty($actividadesSujeto)) {
            Flash::error('Actividades Sujeto not found');

            return redirect(route('actividadesSujetos.index'));
        }

        return view('actividades_sujetos.edit')->with('actividadesSujeto', $actividadesSujeto);
    }

    /**
     * Update the specified ActividadesSujeto in storage.
     *
     * @param  int              $id
     * @param UpdateActividadesSujetoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActividadesSujetoRequest $request)
    {
        $actividadesSujeto = $this->actividadesSujetoRepository->findWithoutFail($id);

        if (empty($actividadesSujeto)) {
            Flash::error('Actividades Sujeto not found');

            return redirect(route('actividadesSujetos.index'));
        }

        $actividadesSujeto = $this->actividadesSujetoRepository->update($request->all(), $id);

        Flash::success('Actividades Sujeto updated successfully.');

        return redirect(route('actividadesSujetos.index'));
    }

    /**
     * Remove the specified ActividadesSujeto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actividadesSujeto = $this->actividadesSujetoRepository->findWithoutFail($id);

        if (empty($actividadesSujeto)) {
            Flash::error('Actividades Sujeto not found');

            return redirect(route('actividadesSujetos.index'));
        }

        $this->actividadesSujetoRepository->delete($id);

        Flash::success('Actividades Sujeto deleted successfully.');

        return redirect(route('actividadesSujetos.index'));
    }
}
