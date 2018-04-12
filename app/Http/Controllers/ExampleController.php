<?php

namespace App\Http\Controllers;

use App\DataTables\ExampleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExampleRequest;
use App\Http\Requests\UpdateExampleRequest;
use App\Repositories\ExampleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ExampleController extends AppBaseController
{
    /** @var  ExampleRepository */
    private $exampleRepository;

    public function __construct(ExampleRepository $exampleRepo)
    {
        $this->exampleRepository = $exampleRepo;
    }

    /**
     * Display a listing of the Example.
     *
     * @param ExampleDataTable $exampleDataTable
     * @return Response
     */
    public function index(ExampleDataTable $exampleDataTable)
    {
        return $exampleDataTable->render('examples.index');
    }

    /**
     * Show the form for creating a new Example.
     *
     * @return Response
     */
    public function create()
    {
        return view('examples.create');
    }

    /**
     * Store a newly created Example in storage.
     *
     * @param CreateExampleRequest $request
     *
     * @return Response
     */
    public function store(CreateExampleRequest $request)
    {
        $input = $request->all();

        $example = $this->exampleRepository->create($input);

        Flash::success('Example saved successfully.');

        return redirect(route('examples.index'));
    }

    /**
     * Display the specified Example.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $example = $this->exampleRepository->findWithoutFail($id);

        if (empty($example)) {
            Flash::error('Example not found');

            return redirect(route('examples.index'));
        }

        return view('examples.show')->with('example', $example);
    }

    /**
     * Show the form for editing the specified Example.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $example = $this->exampleRepository->findWithoutFail($id);

        if (empty($example)) {
            Flash::error('Example not found');

            return redirect(route('examples.index'));
        }

        return view('examples.edit')->with('example', $example);
    }

    /**
     * Update the specified Example in storage.
     *
     * @param  int              $id
     * @param UpdateExampleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExampleRequest $request)
    {
        $example = $this->exampleRepository->findWithoutFail($id);

        if (empty($example)) {
            Flash::error('Example not found');

            return redirect(route('examples.index'));
        }

        $example = $this->exampleRepository->update($request->all(), $id);

        Flash::success('Example updated successfully.');

        return redirect(route('examples.index'));
    }

    /**
     * Remove the specified Example from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $example = $this->exampleRepository->findWithoutFail($id);

        if (empty($example)) {
            Flash::error('Example not found');

            return redirect(route('examples.index'));
        }

        $this->exampleRepository->delete($id);

        Flash::success('Example deleted successfully.');

        return redirect(route('examples.index'));
    }
}
