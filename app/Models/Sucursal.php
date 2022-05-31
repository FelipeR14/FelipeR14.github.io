<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursal
 *
 * @property $id
 * @property $nom_suc
 * @property $dirección
 * @property $created_at
 * @property $updated_at
 *
 * @property Carro[] $carros
 * @property Empleado[] $empleados
 * @property Renta[] $rentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursal extends Model
{
    
    static $rules = [
		'nom_suc' => 'required',
		'dirección' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_suc','dirección'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carros()
    {
        return $this->hasMany('App\Models\Carro', 'sucursal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'sucursal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany('App\Models\Renta', 'sucursal_id', 'id');
    }
    

}
