<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedatadiriRequest;
use App\Http\Requests\UpdatedatadiriRequest;
use App\Repositories\datadiriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class datadiriController extends AppBaseController
{
    /** @var datadiriRepository $datadiriRepository*/
    private $datadiriRepository;

    public function __construct(datadiriRepository $datadiriRepo)
    {
        $this->datadiriRepository = $datadiriRepo;
    }

    /**
     * Display a listing of the datadiri.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $datadiris = $this->datadiriRepository->all();

        return view('datadiris.index')
            ->with('datadiris', $datadiris);
    }

    /**
     * Show the form for creating a new datadiri.
     *
     * @return Response
     */
    public function create()
    {
        return view('datadiris.create');
    }

    /**
     * Store a newly created datadiri in storage.
     *
     * @param CreatedatadiriRequest $request
     *
     * @return Response
     */
    public function store(CreatedatadiriRequest $request)
    {
        $input = $request->all();

        $datadiri = $this->datadiriRepository->create($input);

        Flash::success('Datadiri saved successfully.');

        return redirect(route('datadiris.index'));
    }

    /**
     * Display the specified datadiri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $datadiri = $this->datadiriRepository->find($id);

        if (empty($datadiri)) {
            Flash::error('Datadiri not found');

            return redirect(route('datadiris.index'));
        }

        return view('datadiris.show')->with('datadiri', $datadiri);
    }

    /**
     * Show the form for editing the specified datadiri.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $datadiri = $this->datadiriRepository->find($id);

        if (empty($datadiri)) {
            Flash::error('Datadiri not found');

            return redirect(route('datadiris.index'));
        }

        return view('datadiris.edit')->with('datadiri', $datadiri);
    }

    /**
     * Update the specified datadiri in storage.
     *
     * @param int $id
     * @param UpdatedatadiriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedatadiriRequest $request)
    {
        $datadiri = $this->datadiriRepository->find($id);

        if (empty($datadiri)) {
            Flash::error('Datadiri not found');

            return redirect(route('datadiris.index'));
        }

        $datadiri = $this->datadiriRepository->update($request->all(), $id);

        Flash::success('Datadiri updated successfully.');

        return redirect(route('datadiris.index'));
    }

    /**
     * Remove the specified datadiri from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $datadiri = $this->datadiriRepository->find($id);

        if (empty($datadiri)) {
            Flash::error('Datadiri not found');

            return redirect(route('datadiris.index'));
        }

        $this->datadiriRepository->delete($id);

        Flash::success('Datadiri deleted successfully.');

        return redirect(route('datadiris.index'));
    }
}
