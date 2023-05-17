<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'wisudawan';
    protected $primaryKey = 'id';
    protected $fillable = ['MhswID', 'Nama', 'ProdiID'];
}
