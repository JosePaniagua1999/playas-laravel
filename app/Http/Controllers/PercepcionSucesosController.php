<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePercepcionSucesosRequest;
use App\Http\Requests\UpdatePercepcionSucesosRequest;
use App\Repositories\PercepcionSucesosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PercepcionSucesosController extends AppBaseController
{
    /** @var  PercepcionSucesosRepository */
    private $percepcionSucesosRepository;

    public function __construct(PercepcionSucesosRepository $percepcionSucesosRepo)
    {
        $this->percepcionSucesosRepository = $percepcionSucesosRepo;
    }

    /**
     * Display a listing of the PercepcionSucesos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->percepcionSucesosRepository->pushCriteria(new RequestCriteria($request));
        $percepcionSucesos = $this->percepcionSucesosRepository->all();

        return view('percepcion_sucesos.index')
            ->with('percepcionSucesos', $percepcionSucesos);
    }

    /**
     * Show the form for creating a new PercepcionSucesos.
     *
     * @return Response
     */
    public function create()
    {
        return view('percepcion_sucesos.create');
    }

    /**
     * Store a newly created PercepcionSucesos in storage.
     *
     * @param CreatePercepcionSucesosRequest $request
     *
     * @return Response
     */
    public function store(CreatePercepcionSucesosRequest $request)
    {
        $input = $request->all();

        $percepcionSucesos = $this->percepcionSucesosRepository->create($input);

        Flash::success('Percepcion Sucesos saved successfully.');

        return redirect(route('percepcionSucesos.index'));
    }

    /**
     * Display the specified PercepcionSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $percepcionSucesos = $this->percepcionSucesosRepository->findWithoutFail($id);

        if (empty($percepcionSucesos)) {
            Flash::error('Percepcion Sucesos not found');

            return redirect(route('percepcionSucesos.index'));
        }

        return view('percepcion_sucesos.show')->with('percepcionSucesos', $percepcionSucesos);
    }

    /**
     * Show the form for editing the specified PercepcionSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $percepcionSucesos = $this->percepcionSucesosRepository->findWithoutFail($id);

        if (empty($percepcionSucesos)) {
            Flash::error('Percepcion Sucesos not found');

            return redirect(route('percepcionSucesos.index'));
        }

        return view('percepcion_sucesos.edit')->with('percepcionSucesos', $percepcionSucesos);
    }

    /**
     * Update the specified PercepcionSucesos in storage.
     *
     * @param  int              $id
     * @param UpdatePercepcionSucesosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePercepcionSucesosRequest $request)
    {
        $percepcionSucesos = $this->percepcionSucesosRepository->findWithoutFail($id);

        if (empty($percepcionSucesos)) {
            Flash::error('Percepcion Sucesos not found');

            return redirect(route('percepcionSucesos.index'));
        }

        $percepcionSucesos = $this->percepcionSucesosRepository->update($request->all(), $id);

        Flash::success('Percepcion Sucesos updated successfully.');

        return redirect(route('percepcionSucesos.index'));
    }

    /**
     * Remove the specified PercepcionSucesos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $percepcionSucesos = $this->percepcionSucesosRepository->findWithoutFail($id);

        if (empty($percepcionSucesos)) {
            Flash::error('Percepcion Sucesos not found');

            return redirect(route('percepcionSucesos.index'));
        }

        $this->percepcionSucesosRepository->delete($id);

        Flash::success('Percepcion Sucesos deleted successfully.');

        return redirect(route('percepcionSucesos.index'));
    }
}
