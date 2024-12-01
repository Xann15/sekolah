<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visimisi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'visimisi',
    ];
}
