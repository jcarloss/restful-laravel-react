<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
	// Validacion que permite actualizar informacion de algunos campos
	protected $fillable = ['title', 'description', 'price', 'availability'];
    
}
