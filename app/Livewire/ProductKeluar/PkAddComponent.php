<?php

namespace App\Livewire\ProductKeluar;

use Livewire\Component;
use App\Models\Product_keluar;
use App\Models\Product;
use App\Models\Customers;
use App\Models\Suppliers;

class PkAddComponent extends Component
{
    public $product_id;
    public $supplier_id;
    public $qty;
    public $tanggal;

    public function addProductOut()
    {
        $this->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'qty' => 'required',
            'tanggal' =>'required'
        ]);

        $product_out = new Product_keluar();
        $product_out->qty = $this->qty;
        $product_out->tanggal = $this->tanggal;
        $product_out->product_id = $this->product_id;
        $product_out->supplier_id = $this->supplier_id;
        $product_out->save();

        $product = Product::find($this->product_id);
        $product->qty -= $this->qty;
        $product->save();

        session()->flash('notif', 'Berhasil Di Input');
        return redirect()->route('product_keluar.all');
    }

    public function render()
    {
        $products = Product::all();
        $suppliers = Suppliers::all();
        return view('livewire.product-keluar.pk-add-component', [
            'products' => $products,
            'suppliers' => $suppliers
        ])->layout('layouts.layout-admin');
    }
}
