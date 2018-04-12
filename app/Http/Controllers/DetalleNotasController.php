<?php

namespace App\Http\Controllers;

use App\DataTables\DetalleNotasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDetalleNotasRequest;
use App\Http\Requests\UpdateDetalleNotasRequest;
use App\Repositories\DetalleNotasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DetalleNotasController extends AppBaseController
{
    /** @var  DetalleNotasRepository */
    private $detalleNotasRepository;

    public function __construct(DetalleNotasRepository $detalleNotasRepo)
    {
        $this->detalleNotasRepository = $detalleNotasRepo;
    }

    /**
     * Display a listing of the DetalleNotas.
     *
     * @param DetalleNotasDataTable $detalleNotasDataTable
     * @return Response
     */
    public function index(DetalleNotasDataTable $detalleNotasDataTable)
    {
        return $detalleNotasDataTable->render('detalle_notas.index');
    }

    /**
     * Show the form for creating a new DetalleNotas.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_notas.create');
    }

    /**
     * Store a newly created DetalleNotas in storage.
     *
     * @param CreateDetalleNotasRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalleNotasRequest $request)
    {
        $input = $request->all();

        $detalleNotas = $this->detalleNotasRepository->create($input);

        Flash::success('Detalle Notas saved successfully.');

        return redirect(route('detalleNotas.index'));
    }

    /**
     * Display the specified DetalleNotas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleNotas = $this->detalleNotasRepository->findWithoutFail($id);

        if (empty($detalleNotas)) {
            Flash::error('Detalle Notas not found');

            return redirect(route('detalleNotas.index'));
        }

        return view('detalle_notas.show')->with('detalleNotas', $detalleNotas);
    }

    /**
     * Show the form for editing the specified DetalleNotas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleNotas = $this->detalleNotasRepository->findWithoutFail($id);

        if (empty($detalleNotas)) {
            Flash::error('Detalle Notas not found');

            return redirect(route('detalleNotas.index'));
        }

        return view('detalle_notas.edit')->with('detalleNotas', $detalleNotas);
    }

    /**
     * Update the specified DetalleNotas in storage.
     *
     * @param  int              $id
     * @param UpdateDetalleNotasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalleNotasRequest $request)
    {
        $detalleNotas = $this->detalleNotasRepository->findWithoutFail($id);

        if (empty($detalleNotas)) {
            Flash::error('Detalle Notas not found');

            return redirect(route('detalleNotas.index'));
        }

        $detalleNotas = $this->detalleNotasRepository->update($request->all(), $id);

        Flash::success('Detalle Notas updated successfully.');

        return redirect(route('detalleNotas.index'));
    }

    /**
     * Remove the specified DetalleNotas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleNotas = $this->detalleNotasRepository->findWithoutFail($id);

        if (empty($detalleNotas)) {
            Flash::error('Detalle Notas not found');

            return redirect(route('detalleNotas.index'));
        }

        $this->detalleNotasRepository->delete($id);

        Flash::success('Detalle Notas deleted successfully.');

        return redirect(route('detalleNotas.index'));
    }
}
