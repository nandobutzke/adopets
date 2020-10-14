<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['nm_user', 'ds_public_place', 'ds_complement', 'nm_neighborhood', 'nr_cep', 'nr_phone', 'ds_email', 'ds_bio', 'dt_birth'];

    use HasFactory;
}
