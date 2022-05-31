<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre_emp
 * @property $sucursal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Renta[] $rentas
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'nombre_emp' => 'required',
		'sucursal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_emp','sucursal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany('App\Models\Renta', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_id');
    }
    

}
