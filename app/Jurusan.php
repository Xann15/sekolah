<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jurusan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'foto1',
        'foto2',
        'foto3',
    ];
}
