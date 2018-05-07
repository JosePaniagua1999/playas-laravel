<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnchurasPlayasRequest;
use App\Http\Requests\UpdateAnchurasPlayasRequest;
use App\Repositories\AnchurasPlayasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AnchurasPlayasController extends AppBaseController
{
    /** @var  AnchurasPlayasRepository */
    private $anchurasPlayasRepository;

    public function __construct(AnchurasPlayasRepository $anchurasPlayasRepo)
    {
        $this->anchurasPlayasRepository = $anchurasPlayasRepo;
    }

    /**
     * Display a listing of the AnchurasPlayas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->anchurasPlayasRepository->pushCriteria(new RequestCriteria($request));
        $anchurasPlayas = $this->anchurasPlayasRepository->all();

        return view('anchuras_playas.index')
            ->with('anchurasPlayas', $anchurasPlayas);
    }

    /**
     * Show the form for creating a new AnchurasPlayas.
     *
     * @return Response
     */
    public function create()
    {
        return view('anchuras_playas.create');
    }

    /**
     * Store a newly created AnchurasPlayas in storage.
     *
     * @param CreateAnchurasPlayasRequest $request
     *
     * @return Response
     */
    public function store(CreateAnchurasPlayasRequest $request)
    {
        $input = $request->all();

        $anchurasPlayas = $this->anchurasPlayasRepository->create($input);

        Flash::success('Anchuras Playas saved successfully.');

        return redirect(route('anchurasPlayas.index'));
    }

    /**
     * Display the specified AnchurasPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $anchurasPlayas = $this->anchurasPlayasRepository->findWithoutFail($id);

        if (empty($anchurasPlayas)) {
            Flash::error('Anchuras Playas not found');

            return redirect(route('anchurasPlayas.index'));
        }

        return view('anchuras_playas.show')->with('anchurasPlayas', $anchurasPlayas);
    }

    /**
     * Show the form for editing the specified AnchurasPlayas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $anchurasPlayas = $this->anchurasPlayasRepository->findWithoutFail($id);

        if (empty($anchurasPlayas)) {
            Flash::error('Anchuras Playas not found');

            return redirect(route('anchurasPlayas.index'));
        }

        return view('anchuras_playas.edit')->with('anchurasPlayas', $anchurasPlayas);
    }

    /**
     * Update the specified AnchurasPlayas in storage.
     *
     * @param  int              $id
     * @param UpdateAnchurasPlayasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnchurasPlayasRequest $request)
    {
        $anchurasPlayas = $this->anchurasPlayasRepository->findWithoutFail($id);

        if (empty($anchurasPlayas)) {
            Flash::error('Anchuras Playas not found');

            return redirect(route('anchurasPlayas.index'));
        }

        $anchurasPlayas = $this->anchurasPlayasRepository->update($request->all(), $id);

        Flash::success('Anchuras Playas updated successfully.');

        return redirect(route('anchurasPlayas.index'));
    }

    /**
     * Remove the specified AnchurasPlayas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $anchurasPlayas = $this->anchurasPlayasRepository->findWithoutFail($id);

        if (empty($anchurasPlayas)) {
            Flash::error('Anchuras Playas not found');

            return redirect(route('anchurasPlayas.index'));
        }

        $this->anchurasPlayasRepository->delete($id);

        Flash::success('Anchuras Playas deleted successfully.');

        return redirect(route('anchurasPlayas.index'));
    }
}
