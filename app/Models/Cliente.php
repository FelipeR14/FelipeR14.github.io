<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_cli
 * @property $domicilio
 * @property $telefono
 * @property $empleado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Carro[] $carros
 * @property Empleado $empleado
 * @property Renta[] $rentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre_cli' => 'required',
		'domicilio' => 'required',
		'telefono' => 'required',
		'empleado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cli','domicilio','telefono','empleado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carros()
    {
        return $this->hasMany('App\Models\Carro', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany('App\Models\Renta', 'cliente_id', 'id');
    }
    

}
