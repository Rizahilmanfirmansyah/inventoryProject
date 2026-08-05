<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductAllComponent extends Component
{
    protected $ProdId;
    protected $listeners = ['deleteConfirmed' => 'deleteProd'];

    public function mount()
    {
        $this->ProdId = Product::all();
    }

     public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', id: $id);
    }

    public function deleteProd($id)
    {
        $product = Product::find($id);
        if ($product){
            $product->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->ProdId = Product::all();
        }
    }

    // public function deleteProduct($id)
    // {
    //     $product = Product::find($id);
    //     $product->delete();
    //     session()->flash('notif', 'Product Berhasil Didelete');
    // }
    
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.product-all-component', [
            'products'=> $products
        ])->layout('layouts.layout-admin');
    }
}
