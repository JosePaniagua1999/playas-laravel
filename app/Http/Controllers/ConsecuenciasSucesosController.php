<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsecuenciasSucesosRequest;
use App\Http\Requests\UpdateConsecuenciasSucesosRequest;
use App\Repositories\ConsecuenciasSucesosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConsecuenciasSucesosController extends AppBaseController
{
    /** @var  ConsecuenciasSucesosRepository */
    private $consecuenciasSucesosRepository;

    public function __construct(ConsecuenciasSucesosRepository $consecuenciasSucesosRepo)
    {
        $this->consecuenciasSucesosRepository = $consecuenciasSucesosRepo;
    }

    /**
     * Display a listing of the ConsecuenciasSucesos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->consecuenciasSucesosRepository->pushCriteria(new RequestCriteria($request));
        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->all();

        return view('consecuencias_Sucesos.index')
            ->with('consecuenciasSucesos', $consecuenciasSucesos);
    }

    /**
     * Show the form for creating a new ConsecuenciasSucesos.
     *
     * @return Response
     */
    public function create()
    {
        return view('consecuencias_Sucesos.create');
    }

    /**
     * Store a newly created ConsecuenciasSucesos in storage.
     *
     * @param CreateConsecuenciasSucesosRequest $request
     *
     * @return Response
     */
    public function store(CreateConsecuenciasSucesosRequest $request)
    {
        $input = $request->all();

        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->create($input);

        Flash::success('Consecuencias Sucesos saved successfully.');

        return redirect(route('consecuenciasSucesos.index'));
    }

    /**
     * Display the specified ConsecuenciasSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->findWithoutFail($id);

        if (empty($consecuenciasSucesos)) {
            Flash::error('Consecuencias Sucesos not found');

            return redirect(route('consecuenciasSucesos.index'));
        }

        return view('consecuencias_Sucesos.show')->with('consecuenciasSucesos', $consecuenciasSucesos);
    }

    /**
     * Show the form for editing the specified ConsecuenciasSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->findWithoutFail($id);

        if (empty($consecuenciasSucesos)) {
            Flash::error('Consecuencias Sucesos not found');

            return redirect(route('consecuenciasSucesos.index'));
        }

        return view('consecuencias_Sucesos.edit')->with('consecuenciasSucesos', $consecuenciasSucesos);
    }

    /**
     * Update the specified ConsecuenciasSucesos in storage.
     *
     * @param  int              $id
     * @param UpdateConsecuenciasSucesosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsecuenciasSucesosRequest $request)
    {
        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->findWithoutFail($id);

        if (empty($consecuenciasSucesos)) {
            Flash::error('Consecuencias Sucesos not found');

            return redirect(route('consecuenciasSucesos.index'));
        }

        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->update($request->all(), $id);

        Flash::success('Consecuencias Sucesos updated successfully.');

        return redirect(route('consecuenciasSucesos.index'));
    }

    /**
     * Remove the specified ConsecuenciasSucesos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consecuenciasSucesos = $this->consecuenciasSucesosRepository->findWithoutFail($id);

        if (empty($consecuenciasSucesos)) {
            Flash::error('Consecuencias Sucesos not found');

            return redirect(route('consecuenciasSucesos.index'));
        }

        $this->consecuenciasSucesosRepository->delete($id);

        Flash::success('Consecuencias Sucesos deleted successfully.');

        return redirect(route('consecuenciasSucesos.index'));
    }
}
