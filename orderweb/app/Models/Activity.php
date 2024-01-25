<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    
    protected $table = 'activity';
    protected $fillable = ['description',
    'hours',
    'technician_id',
    'type_id'
    ];


    /*** Se Deebe Colocar El Nombre De La FK Ya Que Esta Hace Referencia Al Campo Document
     *  De Technician y Por LLamarse Diferente a 'id' Debe Especificarse Manualmente */
    public function technician()
        {
            return $this->belongsTo(Technician::class, 'technician_id');
        }
        public function type_activity()
        {
            return $this->belongsTo(TypeActivity::class);
        }

        public function orders()
{
    return $this->belongsToMany(Order::class, 'order_activity', 'order_id', 'activity_id');
}
}



