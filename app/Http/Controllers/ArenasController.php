<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArenasRequest;
use App\Http\Requests\UpdateArenasRequest;
use App\Repositories\ArenasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArenasController extends AppBaseController
{
    /** @var  ArenasRepository */
    private $arenasRepository;

    public function __construct(ArenasRepository $arenasRepo)
    {
        $this->arenasRepository = $arenasRepo;
    }

    /**
     * Display a listing of the Arenas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->arenasRepository->pushCriteria(new RequestCriteria($request));
        $arenas = $this->arenasRepository->all();

        return view('arenas.index')
            ->with('arenas', $arenas);
    }

    /**
     * Show the form for creating a new Arenas.
     *
     * @return Response
     */
    public function create()
    {
        return view('arenas.create');
    }

    /**
     * Store a newly created Arenas in storage.
     *
     * @param CreateArenasRequest $request
     *
     * @return Response
     */
    public function store(CreateArenasRequest $request)
    {
        $input = $request->all();

        $arenas = $this->arenasRepository->create($input);

        Flash::success('Arenas saved successfully.');

        return redirect(route('arenas.index'));
    }

    /**
     * Display the specified Arenas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arenas = $this->arenasRepository->findWithoutFail($id);

        if (empty($arenas)) {
            Flash::error('Arenas not found');

            return redirect(route('arenas.index'));
        }

        return view('arenas.show')->with('arenas', $arenas);
    }

    /**
     * Show the form for editing the specified Arenas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arenas = $this->arenasRepository->findWithoutFail($id);

        if (empty($arenas)) {
            Flash::error('Arenas not found');

            return redirect(route('arenas.index'));
        }

        return view('arenas.edit')->with('arenas', $arenas);
    }

    /**
     * Update the specified Arenas in storage.
     *
     * @param  int              $id
     * @param UpdateArenasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArenasRequest $request)
    {
        $arenas = $this->arenasRepository->findWithoutFail($id);

        if (empty($arenas)) {
            Flash::error('Arenas not found');

            return redirect(route('arenas.index'));
        }

        $arenas = $this->arenasRepository->update($request->all(), $id);

        Flash::success('Arenas updated successfully.');

        return redirect(route('arenas.index'));
    }

    /**
     * Remove the specified Arenas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arenas = $this->arenasRepository->findWithoutFail($id);

        if (empty($arenas)) {
            Flash::error('Arenas not found');

            return redirect(route('arenas.index'));
        }

        $this->arenasRepository->delete($id);

        Flash::success('Arenas deleted successfully.');

        return redirect(route('arenas.index'));
    }
}
