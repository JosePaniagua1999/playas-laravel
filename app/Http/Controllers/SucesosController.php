<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSucesosRequest;
use App\Http\Requests\UpdateSucesosRequest;
use App\Repositories\SucesosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SucesosController extends AppBaseController
{
    /** @var  SucesosRepository */
    private $sucesosRepository;

    public function __construct(SucesosRepository $sucesosRepo)
    {
        $this->sucesosRepository = $sucesosRepo;
    }

    /**
     * Display a listing of the Sucesos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sucesosRepository->pushCriteria(new RequestCriteria($request));
        $sucesos = $this->sucesosRepository->all();

        return view('sucesos.index')
            ->with('sucesos', $sucesos);
    }

    /**
     * Show the form for creating a new Sucesos.
     *
     * @return Response
     */
    public function create()
    {
        return view('sucesos.create');
    }

    /**
     * Store a newly created Sucesos in storage.
     *
     * @param CreateSucesosRequest $request
     *
     * @return Response
     */
    public function store(CreateSucesosRequest $request)
    {
        $input = $request->all();

        $sucesos = $this->sucesosRepository->create($input);

        Flash::success('Sucesos saved successfully.');

        return redirect(route('sucesos.index'));
    }

    /**
     * Display the specified Sucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sucesos = $this->sucesosRepository->findWithoutFail($id);

        if (empty($sucesos)) {
            Flash::error('Sucesos not found');

            return redirect(route('sucesos.index'));
        }

        return view('sucesos.show')->with('sucesos', $sucesos);
    }

    /**
     * Show the form for editing the specified Sucesos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sucesos = $this->sucesosRepository->findWithoutFail($id);

        if (empty($sucesos)) {
            Flash::error('Sucesos not found');

            return redirect(route('sucesos.index'));
        }

        return view('sucesos.edit')->with('sucesos', $sucesos);
    }

    /**
     * Update the specified Sucesos in storage.
     *
     * @param  int              $id
     * @param UpdateSucesosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSucesosRequest $request)
    {
        $sucesos = $this->sucesosRepository->findWithoutFail($id);

        if (empty($sucesos)) {
            Flash::error('Sucesos not found');

            return redirect(route('sucesos.index'));
        }

        $sucesos = $this->sucesosRepository->update($request->all(), $id);

        Flash::success('Sucesos updated successfully.');

        return redirect(route('sucesos.index'));
    }

    /**
     * Remove the specified Sucesos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sucesos = $this->sucesosRepository->findWithoutFail($id);

        if (empty($sucesos)) {
            Flash::error('Sucesos not found');

            return redirect(route('sucesos.index'));
        }

        $this->sucesosRepository->delete($id);

        Flash::success('Sucesos deleted successfully.');

        return redirect(route('sucesos.index'));
    }
}
