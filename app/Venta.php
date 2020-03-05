<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function productos()
    {
        return $this->hasMany("App\ProductoVendido", "id_venta");
    }
}
