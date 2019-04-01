<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinas extends Model {

    protected $fillable = ['nombre', 'cateria_id', 'estado'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
