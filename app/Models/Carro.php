<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carro
 *
 * @property $id
 * @property $nombre
 * @property $modelo
 * @property $created_at
 * @property $updated_at
 * @property $sucursal_id
 * @property $cliente_id
 *
 * @property Cliente $cliente
 * @property Renta[] $rentas
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'modelo' => 'required',
		'sucursal_id' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','modelo','sucursal_id','cliente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany('App\Models\Renta', 'carro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_id');
    }
    

}
