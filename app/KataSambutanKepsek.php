<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KataSambutanKepsek extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'katasambutankepsek';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'pesan',
        'foto',
    ];
}
