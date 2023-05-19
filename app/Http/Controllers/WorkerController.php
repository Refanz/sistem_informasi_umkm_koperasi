<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Worker::where('id', $id)->get();

        $id_usaha = Request::query('id_usaha');

        return view('admin.data-detail-usaha.edit-data-tkerja')->with([
            'user' => Auth::user(),
            'id_usaha' => $id_usaha,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkerRequest  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        $request->validate([
            'tahun_tenaga_kerja' => 'required',
            'jumlah_tenaga_kerja' => 'required'
        ]);

        $id_usaha = $request->input('id_usaha');

        $id = Route::getCurrentRoute()->parameter('id');

        Worker::where('id', $id)->update([
            'tahun' => $request->input('tahun_tenaga_kerja'),
            'jumlah_pekerja' => $request->input('jumlah_tenaga_kerja')
        ]);

        return redirect()->route('detailUsaha', ['id' => $id_usaha])->with('success', 'Data tenaga kerja berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Worker::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data tenaga kerja berhasil dihapus');
    }
}
