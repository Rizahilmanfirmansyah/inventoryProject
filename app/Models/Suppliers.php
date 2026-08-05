<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Suppliers extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = "Suppliers";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon'
    ];

    public function getDescriptionForEvent(string $eventName) : string {
        return $this->description . " {$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('Suppliers');
    }


    public function product_masuk()
    {
        return $this->hashMany(Product_masuk::class, 'supplier_id');
    }

      public function product_keluar()
    {
        return $this->hashMany(Product_keluar::class, 'supplier_id');
    }
}
