<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateplayasRequest;
use App\Http\Requests\UpdateplayasRequest;
use App\Repositories\playasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class playasController extends AppBaseController
{
    /** @var  playasRepository */
    private $playasRepository;

    public function __construct(playasRepository $playasRepo)
    {
        $this->playasRepository = $playasRepo;
    }

    /**
     * Display a listing of the playas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->playasRepository->pushCriteria(new RequestCriteria($request));
        $playas = $this->playasRepository->all();

        return view('playas.index')
            ->with('playas', $playas);
    }

    /**
     * Show the form for creating a new playas.
     *
     * @return Response
     */
    public function create()
    {
        return view('playas.create');
    }

    /**
     * Store a newly created playas in storage.
     *
     * @param CreateplayasRequest $request
     *
     * @return Response
     */
    public function store(CreateplayasRequest $request)
    {
        $input = $request->all();

        $playas = $this->playasRepository->create($input);

        Flash::success('Playas saved successfully.');

        return redirect(route('playas.index'));
    }

    /**
     * Display the specified playas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $playas = $this->playasRepository->findWithoutFail($id);

        if (empty($playas)) {
            Flash::error('Playas not found');

            return redirect(route('playas.index'));
        }

        return view('playas.show')->with('playas', $playas);
    }

    /**
     * Show the form for editing the specified playas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $playas = $this->playasRepository->findWithoutFail($id);

        if (empty($playas)) {
            Flash::error('Playas not found');

            return redirect(route('playas.index'));
        }

        return view('playas.edit')->with('playas', $playas);
    }

    /**
     * Update the specified playas in storage.
     *
     * @param  int              $id
     * @param UpdateplayasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateplayasRequest $request)
    {
        $playas = $this->playasRepository->findWithoutFail($id);

        if (empty($playas)) {
            Flash::error('Playas not found');

            return redirect(route('playas.index'));
        }

        $playas = $this->playasRepository->update($request->all(), $id);

        Flash::success('Playas updated successfully.');

        return redirect(route('playas.index'));
    }

    /**
     * Remove the specified playas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $playas = $this->playasRepository->findWithoutFail($id);

        if (empty($playas)) {
            Flash::error('Playas not found');

            return redirect(route('playas.index'));
        }

        $this->playasRepository->delete($id);

        Flash::success('Playas deleted successfully.');

        return redirect(route('playas.index'));
    }
}
