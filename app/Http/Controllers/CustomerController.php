<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Menampilkan daftar customer.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Menampilkan form untuk membuat customer baru.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Menyimpan customer baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input nama harus ada
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')
                         ->with('success', 'Nasabah berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit customer.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update data customer.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')
                         ->with('success', 'Data nasabah berhasil diperbarui.');
    }

    /**
     * Menghapus customer.
     */
    public function destroy(Customer $customer)
    {
        // Hapus customer (Akun terkait akan ikut terhapus jika onDelete('cascade') aktif di migration)
        $customer->delete();

        return redirect()->route('customers.index')
                         ->with('success', 'Nasabah berhasil dihapus.');
    }
}
