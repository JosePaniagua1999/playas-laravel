<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDistanciaDespTerrestreRequest;
use App\Http\Requests\UpdateDistanciaDespTerrestreRequest;
use App\Repositories\DistanciaDespTerrestreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DistanciaDespTerrestreController extends AppBaseController
{
    /** @var  DistanciaDespTerrestreRepository */
    private $distanciaDespTerrestreRepository;

    public function __construct(DistanciaDespTerrestreRepository $distanciaDespTerrestreRepo)
    {
        $this->distanciaDespTerrestreRepository = $distanciaDespTerrestreRepo;
    }

    /**
     * Display a listing of the DistanciaDespTerrestre.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->distanciaDespTerrestreRepository->pushCriteria(new RequestCriteria($request));
        $distanciaDespTerrestres = $this->distanciaDespTerrestreRepository->all();

        return view('distancia_desp_terrestres.index')
            ->with('distanciaDespTerrestres', $distanciaDespTerrestres);
    }

    /**
     * Show the form for creating a new DistanciaDespTerrestre.
     *
     * @return Response
     */
    public function create()
    {
        return view('distancia_desp_terrestres.create');
    }

    /**
     * Store a newly created DistanciaDespTerrestre in storage.
     *
     * @param CreateDistanciaDespTerrestreRequest $request
     *
     * @return Response
     */
    public function store(CreateDistanciaDespTerrestreRequest $request)
    {
        $input = $request->all();

        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->create($input);

        Flash::success('Distancia Desp Terrestre saved successfully.');

        return redirect(route('distanciaDespTerrestres.index'));
    }

    /**
     * Display the specified DistanciaDespTerrestre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->findWithoutFail($id);

        if (empty($distanciaDespTerrestre)) {
            Flash::error('Distancia Desp Terrestre not found');

            return redirect(route('distanciaDespTerrestres.index'));
        }

        return view('distancia_desp_terrestres.show')->with('distanciaDespTerrestre', $distanciaDespTerrestre);
    }

    /**
     * Show the form for editing the specified DistanciaDespTerrestre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->findWithoutFail($id);

        if (empty($distanciaDespTerrestre)) {
            Flash::error('Distancia Desp Terrestre not found');

            return redirect(route('distanciaDespTerrestres.index'));
        }

        return view('distancia_desp_terrestres.edit')->with('distanciaDespTerrestre', $distanciaDespTerrestre);
    }

    /**
     * Update the specified DistanciaDespTerrestre in storage.
     *
     * @param  int              $id
     * @param UpdateDistanciaDespTerrestreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDistanciaDespTerrestreRequest $request)
    {
        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->findWithoutFail($id);

        if (empty($distanciaDespTerrestre)) {
            Flash::error('Distancia Desp Terrestre not found');

            return redirect(route('distanciaDespTerrestres.index'));
        }

        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->update($request->all(), $id);

        Flash::success('Distancia Desp Terrestre updated successfully.');

        return redirect(route('distanciaDespTerrestres.index'));
    }

    /**
     * Remove the specified DistanciaDespTerrestre from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $distanciaDespTerrestre = $this->distanciaDespTerrestreRepository->findWithoutFail($id);

        if (empty($distanciaDespTerrestre)) {
            Flash::error('Distancia Desp Terrestre not found');

            return redirect(route('distanciaDespTerrestres.index'));
        }

        $this->distanciaDespTerrestreRepository->delete($id);

        Flash::success('Distancia Desp Terrestre deleted successfully.');

        return redirect(route('distanciaDespTerrestres.index'));
    }
}
