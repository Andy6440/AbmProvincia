<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provincias';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_provincia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion_provincia'];

    /**
     * the attributes that should be hidden for arrays.
     *
     * @var collection
     */
    public function ciudades()
    {
        return $this->hasMany(Ciudad::class, 'id_provincia','id_provincia');
    }
}
