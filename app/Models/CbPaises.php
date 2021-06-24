<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CbPaises extends Model
{
    use HasFactory;
    protected $table='cb_paises';
    protected $primaryKey = 'id';
    protected $fillable =  array('nombre', 'id_socio', 'id_relacion');
    
    protected $hidden = ['created_at','updated_at'];
}
