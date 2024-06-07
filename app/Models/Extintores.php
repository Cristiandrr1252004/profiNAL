<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extintores extends Model
{
    use HasFactory;

    protected $fillable = [
        'capacidad', 
        'fechafabricacion', 
        'estado', 
        'idtipo', 
        'idubicacion', 
        'idproveedor'
    ];
}