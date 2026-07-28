<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = "products";
    protected $fillable = ['category_id','nama','harga','image','qty'];

    protected $hidden = ['created_at','updated_at'];

    
    public function getDescriptionForEvent(string $eventName) : string {
        return $this->description . " {$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('product');
    }



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product_masuk()
    {
        return $this->hasMany(Product_masuk::class, 'id');
    }

    public function product_keluar()
    {
        return $this->hasMany(Product_keluar::class, 'id');
    }

    public function retur()
    {
        return $this->hasMany(Retur::class, 'id');
    }

    public function peminjaman_barang()
    {
        return $this->hasMany(Pembar::class, 'id');
    }
    
}
