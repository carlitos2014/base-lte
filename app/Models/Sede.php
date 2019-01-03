<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //Nombre de la tabla en la base de datos
	protected $table = 'sedes';


	protected $fillable = [
		'nombre',
		'direccion',
		'telefono',
		'web',
		'email',
	];

	public static function rules($id = 0){
		return [
			'nombre'    => ['required','max:100','unique:nombre'],
			'direccion' => ['required','max:100'],
			'telefono'  => ['required','max:20'],
			'web'       => ['max:100'],
			'email'     => ['required','email','max:320'],
		];
	}

	public function auditorias()
	{
		return $this->hasMany(Auditoria::class);
	}
}
