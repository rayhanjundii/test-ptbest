<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrudRequest;
use App\Http\Requests\UpdateCrudRequest;
use App\Repositories\CrudRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CrudController extends AppBaseController
{
    /** @var CrudRepository $crudRepository*/
    private $crudRepository;

    public function __construct(CrudRepository $crudRepo)
    {
        $this->crudRepository = $crudRepo;
    }

    /**
     * Display a listing of the Crud.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cruds = $this->crudRepository->all();

        return view('cruds.index')
            ->with('cruds', $cruds);
    }

    /**
     * Show the form for creating a new Crud.
     *
     * @return Response
     */
    public function create()
    {
        return view('cruds.create');
    }

    /**
     * Store a newly created Crud in storage.
     *
     * @param CreateCrudRequest $request
     *
     * @return Response
     */
    public function store(CreateCrudRequest $request)
    {
        $input = $request->all();

        $crud = $this->crudRepository->create($input);

        Flash::success('Crud saved successfully.');

        return redirect(route('cruds.index'));
    }

    /**
     * Display the specified Crud.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crud = $this->crudRepository->find($id);

        if (empty($crud)) {
            Flash::error('Crud not found');

            return redirect(route('cruds.index'));
        }

        return view('cruds.show')->with('crud', $crud);
    }

    /**
     * Show the form for editing the specified Crud.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crud = $this->crudRepository->find($id);

        if (empty($crud)) {
            Flash::error('Crud not found');

            return redirect(route('cruds.index'));
        }

        return view('cruds.edit')->with('crud', $crud);
    }

    /**
     * Update the specified Crud in storage.
     *
     * @param int $id
     * @param UpdateCrudRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrudRequest $request)
    {
        $crud = $this->crudRepository->find($id);

        if (empty($crud)) {
            Flash::error('Crud not found');

            return redirect(route('cruds.index'));
        }

        $crud = $this->crudRepository->update($request->all(), $id);

        Flash::success('Crud updated successfully.');

        return redirect(route('cruds.index'));
    }

    /**
     * Remove the specified Crud from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crud = $this->crudRepository->find($id);

        if (empty($crud)) {
            Flash::error('Crud not found');

            return redirect(route('cruds.index'));
        }

        $this->crudRepository->delete($id);

        Flash::success('Crud deleted successfully.');

        return redirect(route('cruds.index'));
    }
}
