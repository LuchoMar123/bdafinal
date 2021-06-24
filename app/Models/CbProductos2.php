<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CbProductos2 extends Model
{
    use HasFactory;
    protected $table='cb_productos2';
    protected $primaryKey = 'id';
    protected $fillable =  array('nombre', 'tipo', 'precio','cantidad','descripcion');
    
    protected $hidden = ['created_at','updated_at'];
}
