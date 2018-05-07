<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipologiaSucesosRequest;
use App\Http\Requests\UpdateTipologiaSucesosRequest;
use App\Repositories\TipologiaSucesosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipologiaSucesosController extends AppBaseController
{
    /** @var  TipologiaSucesosRepository */
    private $tipologiaSucesosRepository;

    public function __construct(TipologiaSucesosRepository $tipologiaSucesosRepo)
    {
        $this->tipologiaSucesosRepository = $tipologiaSucesosRepo;
    }

    /**
     * Display a listing of the TipologiaSucesos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipologiaSucesosRepository->pushCriteria(new RequestCriteria($request));
        $tipologiaSucesos = $this->tipologiaSucesosRepository->all();

        return view('tipologia_sucesos.index')
            ->with('tipologiaSucesos', $tipologiaSucesos);
    }

    /**
     * Show the form for creating a new TipologiaSucesos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipologia_sucesos.create');
    }

    /**
     * Store a newly created TipologiaSucesos in storage.
     *
     * @param CreateTipologiaSucesosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipologiaSucesosRequest $request)
    {
        $input = $request->all();

        $tipologiaSucesos = $this->tipologiaSucesosRepository->create($input);

        Flash::success('Tipologia Sucesos saved successfully.');

        return redirect(route('tipologiaSucesos.index'));
    }

    /**
     * Display the specified TipologiaSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipologiaSucesos = $this->tipologiaSucesosRepository->findWithoutFail($id);

        if (empty($tipologiaSucesos)) {
            Flash::error('Tipologia Sucesos not found');

            return redirect(route('tipologiaSucesos.index'));
        }

        return view('tipologia_sucesos.show')->with('tipologiaSucesos', $tipologiaSucesos);
    }

    /**
     * Show the form for editing the specified TipologiaSucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipologiaSucesos = $this->tipologiaSucesosRepository->findWithoutFail($id);

        if (empty($tipologiaSucesos)) {
            Flash::error('Tipologia Sucesos not found');

            return redirect(route('tipologiaSucesos.index'));
        }

        return view('tipologia_sucesos.edit')->with('tipologiaSucesos', $tipologiaSucesos);
    }

    /**
     * Update the specified TipologiaSucesos in storage.
     *
     * @param  int              $id
     * @param UpdateTipologiaSucesosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipologiaSucesosRequest $request)
    {
        $tipologiaSucesos = $this->tipologiaSucesosRepository->findWithoutFail($id);

        if (empty($tipologiaSucesos)) {
            Flash::error('Tipologia Sucesos not found');

            return redirect(route('tipologiaSucesos.index'));
        }

        $tipologiaSucesos = $this->tipologiaSucesosRepository->update($request->all(), $id);

        Flash::success('Tipologia Sucesos updated successfully.');

        return redirect(route('tipologiaSucesos.index'));
    }

    /**
     * Remove the specified TipologiaSucesos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipologiaSucesos = $this->tipologiaSucesosRepository->findWithoutFail($id);

        if (empty($tipologiaSucesos)) {
            Flash::error('Tipologia Sucesos not found');

            return redirect(route('tipologiaSucesos.index'));
        }

        $this->tipologiaSucesosRepository->delete($id);

        Flash::success('Tipologia Sucesos deleted successfully.');

        return redirect(route('tipologiaSucesos.index'));
    }
}
