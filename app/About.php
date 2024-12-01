<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'about';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deskripsi_singkat',
        'deskripsi_panjang',
        'logo_sekolah',
    ];
}
