<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Product_keluar extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'product_keluar';

    protected $fillable = ['product_id','supplier_id','qty','tanggal'];

    protected $hidden = ['created_at','updated_at'];

    public function getDescriptionForEvent(string $eventName) : string {
        return $this->description . " {$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('product_keluar');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'supplier_id');
    }

    // public function customer()
    // {
    //     return $this->belongsTo(Customers::class, 'customer_id');
    // }

 
}
