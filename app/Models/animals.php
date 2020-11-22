<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animals extends Model
{

    protected $table = 'animals';
    protected $primaryKey = 'id_animal';
    protected $fillable = ['nr_age', 'nm_name', 'ds_genre', 'ds_species', 'ds_breed', 'ds_bio', 'dt_born', 'id_user', 'img_animal'];

    use HasFactory;
}
