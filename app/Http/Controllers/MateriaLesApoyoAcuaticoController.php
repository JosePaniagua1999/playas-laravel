<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMateriaLesApoyoAcuaticoRequest;
use App\Http\Requests\UpdateMateriaLesApoyoAcuaticoRequest;
use App\Repositories\MateriaLesApoyoAcuaticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MateriaLesApoyoAcuaticoController extends AppBaseController
{
    /** @var  MateriaLesApoyoAcuaticoRepository */
    private $materiaLesApoyoAcuaticoRepository;

    public function __construct(MateriaLesApoyoAcuaticoRepository $materiaLesApoyoAcuaticoRepo)
    {
        $this->materiaLesApoyoAcuaticoRepository = $materiaLesApoyoAcuaticoRepo;
    }

    /**
     * Display a listing of the MateriaLesApoyoAcuatico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->materiaLesApoyoAcuaticoRepository->pushCriteria(new RequestCriteria($request));
        $materiaLesApoyoAcuaticos = $this->materiaLesApoyoAcuaticoRepository->all();

        return view('materia_les_apoyo_acuaticos.index')
            ->with('materiaLesApoyoAcuaticos', $materiaLesApoyoAcuaticos);
    }

    /**
     * Show the form for creating a new MateriaLesApoyoAcuatico.
     *
     * @return Response
     */
    public function create()
    {
        return view('materia_les_apoyo_acuaticos.create');
    }

    /**
     * Store a newly created MateriaLesApoyoAcuatico in storage.
     *
     * @param CreateMateriaLesApoyoAcuaticoRequest $request
     *
     * @return Response
     */
    public function store(CreateMateriaLesApoyoAcuaticoRequest $request)
    {
        $input = $request->all();

        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->create($input);

        Flash::success('Materia Les Apoyo Acuatico saved successfully.');

        return redirect(route('materiaLesApoyoAcuaticos.index'));
    }

    /**
     * Display the specified MateriaLesApoyoAcuatico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->findWithoutFail($id);

        if (empty($materiaLesApoyoAcuatico)) {
            Flash::error('Materia Les Apoyo Acuatico not found');

            return redirect(route('materiaLesApoyoAcuaticos.index'));
        }

        return view('materia_les_apoyo_acuaticos.show')->with('materiaLesApoyoAcuatico', $materiaLesApoyoAcuatico);
    }

    /**
     * Show the form for editing the specified MateriaLesApoyoAcuatico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->findWithoutFail($id);

        if (empty($materiaLesApoyoAcuatico)) {
            Flash::error('Materia Les Apoyo Acuatico not found');

            return redirect(route('materiaLesApoyoAcuaticos.index'));
        }

        return view('materia_les_apoyo_acuaticos.edit')->with('materiaLesApoyoAcuatico', $materiaLesApoyoAcuatico);
    }

    /**
     * Update the specified MateriaLesApoyoAcuatico in storage.
     *
     * @param  int              $id
     * @param UpdateMateriaLesApoyoAcuaticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMateriaLesApoyoAcuaticoRequest $request)
    {
        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->findWithoutFail($id);

        if (empty($materiaLesApoyoAcuatico)) {
            Flash::error('Materia Les Apoyo Acuatico not found');

            return redirect(route('materiaLesApoyoAcuaticos.index'));
        }

        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->update($request->all(), $id);

        Flash::success('Materia Les Apoyo Acuatico updated successfully.');

        return redirect(route('materiaLesApoyoAcuaticos.index'));
    }

    /**
     * Remove the specified MateriaLesApoyoAcuatico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materiaLesApoyoAcuatico = $this->materiaLesApoyoAcuaticoRepository->findWithoutFail($id);

        if (empty($materiaLesApoyoAcuatico)) {
            Flash::error('Materia Les Apoyo Acuatico not found');

            return redirect(route('materiaLesApoyoAcuaticos.index'));
        }

        $this->materiaLesApoyoAcuaticoRepository->delete($id);

        Flash::success('Materia Les Apoyo Acuatico deleted successfully.');

        return redirect(route('materiaLesApoyoAcuaticos.index'));
    }
}
