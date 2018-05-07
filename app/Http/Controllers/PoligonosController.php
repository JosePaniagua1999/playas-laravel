<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePoligonosRequest;
use App\Http\Requests\UpdatePoligonosRequest;
use App\Repositories\PoligonosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PoligonosController extends AppBaseController
{
    /** @var  PoligonosRepository */
    private $poligonosRepository;

    public function __construct(PoligonosRepository $poligonosRepo)
    {
        $this->poligonosRepository = $poligonosRepo;
    }

    /**
     * Display a listing of the Poligonos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->poligonosRepository->pushCriteria(new RequestCriteria($request));
        $poligonos = $this->poligonosRepository->all();

        return view('poligonos.index')
            ->with('poligonos', $poligonos);
    }

    /**
     * Show the form for creating a new Poligonos.
     *
     * @return Response
     */
    public function create()
    {
        return view('poligonos.create');
    }

    /**
     * Store a newly created Poligonos in storage.
     *
     * @param CreatePoligonosRequest $request
     *
     * @return Response
     */
    public function store(CreatePoligonosRequest $request)
    {
        $input = $request->all();

        $poligonos = $this->poligonosRepository->create($input);

        Flash::success('Poligonos saved successfully.');

        return redirect(route('poligonos.index'));
    }

    /**
     * Display the specified Poligonos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $poligonos = $this->poligonosRepository->findWithoutFail($id);

        if (empty($poligonos)) {
            Flash::error('Poligonos not found');

            return redirect(route('poligonos.index'));
        }

        return view('poligonos.show')->with('poligonos', $poligonos);
    }

    /**
     * Show the form for editing the specified Poligonos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $poligonos = $this->poligonosRepository->findWithoutFail($id);

        if (empty($poligonos)) {
            Flash::error('Poligonos not found');

            return redirect(route('poligonos.index'));
        }

        return view('poligonos.edit')->with('poligonos', $poligonos);
    }

    /**
     * Update the specified Poligonos in storage.
     *
     * @param  int              $id
     * @param UpdatePoligonosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoligonosRequest $request)
    {
        $poligonos = $this->poligonosRepository->findWithoutFail($id);

        if (empty($poligonos)) {
            Flash::error('Poligonos not found');

            return redirect(route('poligonos.index'));
        }

        $poligonos = $this->poligonosRepository->update($request->all(), $id);

        Flash::success('Poligonos updated successfully.');

        return redirect(route('poligonos.index'));
    }

    /**
     * Remove the specified Poligonos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $poligonos = $this->poligonosRepository->findWithoutFail($id);

        if (empty($poligonos)) {
            Flash::error('Poligonos not found');

            return redirect(route('poligonos.index'));
        }

        $this->poligonosRepository->delete($id);

        Flash::success('Poligonos deleted successfully.');

        return redirect(route('poligonos.index'));
    }
}
