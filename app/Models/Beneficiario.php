<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beneficiario
 *
 * @property $id
 * @property $nombre
 * @property $correo
 * @property $password
 * @property $idTarifa
 * @property $idCampus
 * @property $estado
 * @property $vegetariano
 * @property $detalleAlimenticio
 * @property $programa
 * @property $nContacto
 * @property $created_at
 * @property $updated_at
 *
 * @property Campus $campus
 * @property Tarifa $tarifa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Beneficiario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'correo' => 'required',
		'idTarifa' => 'required',
		'idCampus' => 'required',
		'estado' => 'required',
		'vegetariano' => 'required',
		'programa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','correo','idTarifa','idCampus','estado','vegetariano','detalleAlimenticio','programa','nContacto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campus()
    {
        return $this->hasOne('App\Models\Campus', 'id', 'idCampus');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarifa()
    {
        return $this->hasOne('App\Models\Tarifa', 'id', 'idTarifa');
    }
    

}
