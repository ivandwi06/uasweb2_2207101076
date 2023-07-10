<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listrik;
class ListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Listrik::all();
        return view('listrik.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listrik.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'no_pelanggan' => 'bail|required|unique:tb_tagihan',
                'nama_pelanggan' => 'required'
            ],
            [
                'no_pelanggan.required' => 'No wajib diisi',
                'no_pelanggan.unique' => 'No sudah ada',
                'nama_pelanggan.required' => 'Nama wajib diisi'
            ]
        );

        Listrik::create([
            'no_pelanggan' => $request->no_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'jml_tagihan' => $request->jml_tagihan,
            'keterangan' => $request->keterangan
        ]);

        return redirect('listrik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Listrik::findOrFail($id);
        return view('listrik.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'no_pelanggan' => 'bail|required',
                'nama_pelanggan' => 'required'
            ],
            [
                'no_pelanggan' => 'No wajib diisi',
                'nama_pelanggan' => 'Nama wajib diisi'
            ]
        );

        $row = Listrik::findOrFail($id);
        $row->update([
            'no_pelanggan' => $request->no_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'jml_tagihan' => $request->jml_tagihan,
            'keterangan' => $request->keterangan
        ]);

        return redirect('listrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Listrik::findOrFail($id);
        $row->delete();

        return redirect('listrik');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Listrik::where('nama_pelanggan', 'like', "%" . $keyword . "%")->paginate(5);
        return view('listrik.index', compact('rows'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
