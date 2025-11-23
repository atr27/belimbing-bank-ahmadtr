<?php

namespace App\Http\Controllers;
use App\Models\DepositoType;
use Illuminate\Http\Request;

class DepositoTypeController extends Controller
{
    /**
     * Menampilkan daftar tipe deposito.
     */
    public function index()
    {
        $types = DepositoType::all();

        return view('deposito_types.index', compact('types'));
    }

    /**
     * Menampilkan form tambah tipe deposito.
     */
    public function create()
    {
        return view('deposito_types.create');
    }

    /**
     * Simpan tipe deposito baru.
     */
    public function store(Request $request)
    {
        // Validasi: nama wajib, yearly_return wajib & harus angka
        $request->validate([
            'name' => 'required|string|max:255',
            'yearly_return' => 'required|numeric|min:0',
        ]);

        DepositoType::create($request->all());

        return redirect()->route('deposito-types.index')
            ->with('success', 'Tipe Deposito berhasil ditambahkan.');
    }

    /**
     * Form edit tipe deposito.
     */
    public function edit($id)
    {
        $depositoType = DepositoType::findOrFail($id);

        return view('deposito_types.edit', compact('depositoType'));
    }

    /**
     * Update tipe deposito.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'yearly_return' => 'required|numeric|min:0',
        ]);

        $depositoType = DepositoType::findOrFail($id);
        $depositoType->update($request->all());

        return redirect()->route('deposito-types.index')
            ->with('success', 'Tipe Deposito berhasil diperbarui.');
    }

    /**
     * Hapus tipe deposito.
     */
    public function destroy($id)
    {
        $depositoType = DepositoType::findOrFail($id);
        $depositoType->delete();

        return redirect()->route('deposito-types.index')
            ->with('success', 'Tipe Deposito berhasil dihapus.');
    }
}
