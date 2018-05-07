<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDistanciaDespAcuaticoRequest;
use App\Http\Requests\UpdateDistanciaDespAcuaticoRequest;
use App\Repositories\DistanciaDespAcuaticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DistanciaDespAcuaticoController extends AppBaseController
{
    /** @var  DistanciaDespAcuaticoRepository */
    private $distanciaDespAcuaticoRepository;

    public function __construct(DistanciaDespAcuaticoRepository $distanciaDespAcuaticoRepo)
    {
        $this->distanciaDespAcuaticoRepository = $distanciaDespAcuaticoRepo;
    }

    /**
     * Display a listing of the DistanciaDespAcuatico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->distanciaDespAcuaticoRepository->pushCriteria(new RequestCriteria($request));
        $distanciaDespAcuaticos = $this->distanciaDespAcuaticoRepository->all();

        return view('distancia_desp_acuaticos.index')
            ->with('distanciaDespAcuaticos', $distanciaDespAcuaticos);
    }

    /**
     * Show the form for creating a new DistanciaDespAcuatico.
     *
     * @return Response
     */
    public function create()
    {
        return view('distancia_desp_acuaticos.create');
    }

    /**
     * Store a newly created DistanciaDespAcuatico in storage.
     *
     * @param CreateDistanciaDespAcuaticoRequest $request
     *
     * @return Response
     */
    public function store(CreateDistanciaDespAcuaticoRequest $request)
    {
        $input = $request->all();

        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->create($input);

        Flash::success('Distancia Desp Acuatico saved successfully.');

        return redirect(route('distanciaDespAcuaticos.index'));
    }

    /**
     * Display the specified DistanciaDespAcuatico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->findWithoutFail($id);

        if (empty($distanciaDespAcuatico)) {
            Flash::error('Distancia Desp Acuatico not found');

            return redirect(route('distanciaDespAcuaticos.index'));
        }

        return view('distancia_desp_acuaticos.show')->with('distanciaDespAcuatico', $distanciaDespAcuatico);
    }

    /**
     * Show the form for editing the specified DistanciaDespAcuatico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->findWithoutFail($id);

        if (empty($distanciaDespAcuatico)) {
            Flash::error('Distancia Desp Acuatico not found');

            return redirect(route('distanciaDespAcuaticos.index'));
        }

        return view('distancia_desp_acuaticos.edit')->with('distanciaDespAcuatico', $distanciaDespAcuatico);
    }

    /**
     * Update the specified DistanciaDespAcuatico in storage.
     *
     * @param  int              $id
     * @param UpdateDistanciaDespAcuaticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDistanciaDespAcuaticoRequest $request)
    {
        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->findWithoutFail($id);

        if (empty($distanciaDespAcuatico)) {
            Flash::error('Distancia Desp Acuatico not found');

            return redirect(route('distanciaDespAcuaticos.index'));
        }

        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->update($request->all(), $id);

        Flash::success('Distancia Desp Acuatico updated successfully.');

        return redirect(route('distanciaDespAcuaticos.index'));
    }

    /**
     * Remove the specified DistanciaDespAcuatico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $distanciaDespAcuatico = $this->distanciaDespAcuaticoRepository->findWithoutFail($id);

        if (empty($distanciaDespAcuatico)) {
            Flash::error('Distancia Desp Acuatico not found');

            return redirect(route('distanciaDespAcuaticos.index'));
        }

        $this->distanciaDespAcuaticoRepository->delete($id);

        Flash::success('Distancia Desp Acuatico deleted successfully.');

        return redirect(route('distanciaDespAcuaticos.index'));
    }
}
