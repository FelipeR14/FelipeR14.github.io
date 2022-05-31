<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renta
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $carro_id
 * @property $sucursal_id
 * @property $empleado_id
 * @property $cliente_id
 *
 * @property Carro $carro
 * @property Cliente $cliente
 * @property Empleado $empleado
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Renta extends Model
{
    
    static $rules = [
		'carro_id' => 'required',
		'sucursal_id' => 'required',
		'empleado_id' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carro_id','sucursal_id','empleado_id','cliente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carro()
    {
        return $this->hasOne('App\Models\Carro', 'id', 'carro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_id');
    }
    

}
