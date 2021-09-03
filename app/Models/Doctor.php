<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'especialidade', 'crm'];

    public function getCreatedAtAttribute($value)   {
        return (new \DateTime($value))->format('d/m/Y h:i:s');
    }
}
