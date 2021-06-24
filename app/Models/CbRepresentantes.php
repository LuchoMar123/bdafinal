<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CbRepresentantes extends Model
{
    use HasFactory;
    protected $table='cb_representantes';
    protected $primaryKey = 'id';
    protected $fillable =  array('nombreso', 'cargo', 'nacionalidad');
    
    protected $hidden = ['created_at','updated_at'];
}
