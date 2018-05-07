<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEscalasRequest;
use App\Http\Requests\UpdateEscalasRequest;
use App\Repositories\EscalasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EscalasController extends AppBaseController
{
    /** @var  EscalasRepository */
    private $escalasRepository;

    public function __construct(EscalasRepository $escalasRepo)
    {
        $this->escalasRepository = $escalasRepo;
    }

    /**
     * Display a listing of the Escalas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->escalasRepository->pushCriteria(new RequestCriteria($request));
        $escalas = $this->escalasRepository->all();

        return view('escalas.index')
            ->with('escalas', $escalas);
    }

    /**
     * Show the form for creating a new Escalas.
     *
     * @return Response
     */
    public function create()
    {
        return view('escalas.create');
    }

    /**
     * Store a newly created Escalas in storage.
     *
     * @param CreateEscalasRequest $request
     *
     * @return Response
     */
    public function store(CreateEscalasRequest $request)
    {
        $input = $request->all();

        $escalas = $this->escalasRepository->create($input);

        Flash::success('Escalas saved successfully.');

        return redirect(route('escalas.index'));
    }

    /**
     * Display the specified Escalas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $escalas = $this->escalasRepository->findWithoutFail($id);

        if (empty($escalas)) {
            Flash::error('Escalas not found');

            return redirect(route('escalas.index'));
        }

        return view('escalas.show')->with('escalas', $escalas);
    }

    /**
     * Show the form for editing the specified Escalas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $escalas = $this->escalasRepository->findWithoutFail($id);

        if (empty($escalas)) {
            Flash::error('Escalas not found');

            return redirect(route('escalas.index'));
        }

        return view('escalas.edit')->with('escalas', $escalas);
    }

    /**
     * Update the specified Escalas in storage.
     *
     * @param  int              $id
     * @param UpdateEscalasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEscalasRequest $request)
    {
        $escalas = $this->escalasRepository->findWithoutFail($id);

        if (empty($escalas)) {
            Flash::error('Escalas not found');

            return redirect(route('escalas.index'));
        }

        $escalas = $this->escalasRepository->update($request->all(), $id);

        Flash::success('Escalas updated successfully.');

        return redirect(route('escalas.index'));
    }

    /**
     * Remove the specified Escalas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $escalas = $this->escalasRepository->findWithoutFail($id);

        if (empty($escalas)) {
            Flash::error('Escalas not found');

            return redirect(route('escalas.index'));
        }

        $this->escalasRepository->delete($id);

        Flash::success('Escalas deleted successfully.');

        return redirect(route('escalas.index'));
    }
}
