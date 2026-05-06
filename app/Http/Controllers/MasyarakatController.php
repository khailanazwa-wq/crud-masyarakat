<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function index()
    {
        $data = Masyarakat::all();
        return view('masyarakat.index', compact('data'));
    }

    public function create()
    {
        return view('masyarakat.create');
    }

    public function store(Request $request)
    {
        Masyarakat::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_kk' => $request->nomor_kk,
            'nomor_ktp' => $request->nomor_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/masyarakat');
    }

    public function edit($id)
    {
        $data = Masyarakat::find($id);
        return view('masyarakat.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Masyarakat::find($id);
        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_kk' => $request->nomor_kk,
            'nomor_ktp' => $request->nomor_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/masyarakat');
    }

    public function destroy($id)
    {
        $data = Masyarakat::find($id);
        $data->delete();

        return redirect('/masyarakat');
    }
}       