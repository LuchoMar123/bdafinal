<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CbExportaciones extends Model
{
    use HasFactory;
    protected $table='cb_exportaciones';
    protected $primaryKey = 'id';
    protected $fillable =  array('id_producto', 'nombre', 'cantidad');
    
    protected $hidden = ['created_at','updated_at'];
}
