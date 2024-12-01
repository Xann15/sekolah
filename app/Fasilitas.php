<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{

    // Optionally, specify the table name if it's not the plural form of the model
    protected $table = 'fasilitas';

    // Define the fields that can be mass assigned
    protected $fillable = ['nama', 'foto'];
}
