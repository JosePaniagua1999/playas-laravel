<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRutaSujetoPlayaRequest;
use App\Http\Requests\UpdateRutaSujetoPlayaRequest;
use App\Repositories\RutaSujetoPlayaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RutaSujetoPlayaController extends AppBaseController
{
    /** @var  RutaSujetoPlayaRepository */
    private $rutaSujetoPlayaRepository;

    public function __construct(RutaSujetoPlayaRepository $rutaSujetoPlayaRepo)
    {
        $this->rutaSujetoPlayaRepository = $rutaSujetoPlayaRepo;
    }

    /**
     * Display a listing of the RutaSujetoPlaya.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rutaSujetoPlayaRepository->pushCriteria(new RequestCriteria($request));
        $rutaSujetoPlayas = $this->rutaSujetoPlayaRepository->all();

        return view('ruta_sujeto_playas.index')
            ->with('rutaSujetoPlayas', $rutaSujetoPlayas);
    }

    /**
     * Show the form for creating a new RutaSujetoPlaya.
     *
     * @return Response
     */
    public function create()
    {
        return view('ruta_sujeto_playas.create');
    }

    /**
     * Store a newly created RutaSujetoPlaya in storage.
     *
     * @param CreateRutaSujetoPlayaRequest $request
     *
     * @return Response
     */
    public function store(CreateRutaSujetoPlayaRequest $request)
    {
        $input = $request->all();

        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->create($input);

        Flash::success('Ruta Sujeto Playa saved successfully.');

        return redirect(route('rutaSujetoPlayas.index'));
    }

    /**
     * Display the specified RutaSujetoPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->findWithoutFail($id);

        if (empty($rutaSujetoPlaya)) {
            Flash::error('Ruta Sujeto Playa not found');

            return redirect(route('rutaSujetoPlayas.index'));
        }

        return view('ruta_sujeto_playas.show')->with('rutaSujetoPlaya', $rutaSujetoPlaya);
    }

    /**
     * Show the form for editing the specified RutaSujetoPlaya.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->findWithoutFail($id);

        if (empty($rutaSujetoPlaya)) {
            Flash::error('Ruta Sujeto Playa not found');

            return redirect(route('rutaSujetoPlayas.index'));
        }

        return view('ruta_sujeto_playas.edit')->with('rutaSujetoPlaya', $rutaSujetoPlaya);
    }

    /**
     * Update the specified RutaSujetoPlaya in storage.
     *
     * @param  int              $id
     * @param UpdateRutaSujetoPlayaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRutaSujetoPlayaRequest $request)
    {
        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->findWithoutFail($id);

        if (empty($rutaSujetoPlaya)) {
            Flash::error('Ruta Sujeto Playa not found');

            return redirect(route('rutaSujetoPlayas.index'));
        }

        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->update($request->all(), $id);

        Flash::success('Ruta Sujeto Playa updated successfully.');

        return redirect(route('rutaSujetoPlayas.index'));
    }

    /**
     * Remove the specified RutaSujetoPlaya from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rutaSujetoPlaya = $this->rutaSujetoPlayaRepository->findWithoutFail($id);

        if (empty($rutaSujetoPlaya)) {
            Flash::error('Ruta Sujeto Playa not found');

            return redirect(route('rutaSujetoPlayas.index'));
        }

        $this->rutaSujetoPlayaRepository->delete($id);

        Flash::success('Ruta Sujeto Playa deleted successfully.');

        return redirect(route('rutaSujetoPlayas.index'));
    }
}
