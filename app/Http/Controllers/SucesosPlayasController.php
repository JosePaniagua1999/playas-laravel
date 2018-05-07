<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSucesosPlayasRequest;
use App\Http\Requests\UpdateSucesosPlayasRequest;
use App\Repositories\SucesosPlayasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SucesosPlayasController extends AppBaseController
{
    /** @var  SucesosPlayasRepository */
    private $sucesosPlayasRepository;

    public function __construct(SucesosPlayasRepository $sucesosPlayasRepo)
    {
        $this->sucesosPlayasRepository = $sucesosPlayasRepo;
    }

    /**
     * Display a listing of the SucesosPlayas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sucesosPlayasRepository->pushCriteria(new RequestCriteria($request));
        $sucesosPlayas = $this->sucesosPlayasRepository->all();

        return view('sucesos_playas.index')
            ->with('sucesosPlayas', $sucesosPlayas);
    }

    /**
     * Show the form for creating a new SucesosPlayas.
     *
     * @return Response
     */
    public function create()
    {
        return view('sucesos_playas.create');
    }

    /**
     * Store a newly created SucesosPlayas in storage.
     *
     * @param CreateSucesosPlayasRequest $request
     *
     * @return Response
     */
    public function store(CreateSucesosPlayasRequest $request)
    {
        $input = $request->all();

        $sucesosPlayas = $this->sucesosPlayasRepository->create($input);

        Flash::success('Sucesos Playas saved successfully.');

        return redirect(route('sucesosPlayas.index'));
    }

    /**
     * Display the specified SucesosPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sucesosPlayas = $this->sucesosPlayasRepository->findWithoutFail($id);

        if (empty($sucesosPlayas)) {
            Flash::error('Sucesos Playas not found');

            return redirect(route('sucesosPlayas.index'));
        }

        return view('sucesos_playas.show')->with('sucesosPlayas', $sucesosPlayas);
    }

    /**
     * Show the form for editing the specified SucesosPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sucesosPlayas = $this->sucesosPlayasRepository->findWithoutFail($id);

        if (empty($sucesosPlayas)) {
            Flash::error('Sucesos Playas not found');

            return redirect(route('sucesosPlayas.index'));
        }

        return view('sucesos_playas.edit')->with('sucesosPlayas', $sucesosPlayas);
    }

    /**
     * Update the specified SucesosPlayas in storage.
     *
     * @param  int              $id
     * @param UpdateSucesosPlayasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSucesosPlayasRequest $request)
    {
        $sucesosPlayas = $this->sucesosPlayasRepository->findWithoutFail($id);

        if (empty($sucesosPlayas)) {
            Flash::error('Sucesos Playas not found');

            return redirect(route('sucesosPlayas.index'));
        }

        $sucesosPlayas = $this->sucesosPlayasRepository->update($request->all(), $id);

        Flash::success('Sucesos Playas updated successfully.');

        return redirect(route('sucesosPlayas.index'));
    }

    /**
     * Remove the specified SucesosPlayas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sucesosPlayas = $this->sucesosPlayasRepository->findWithoutFail($id);

        if (empty($sucesosPlayas)) {
            Flash::error('Sucesos Playas not found');

            return redirect(route('sucesosPlayas.index'));
        }

        $this->sucesosPlayasRepository->delete($id);

        Flash::success('Sucesos Playas deleted successfully.');

        return redirect(route('sucesosPlayas.index'));
    }
}
