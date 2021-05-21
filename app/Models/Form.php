<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['from_name', 'to_name', 'date', 'time', 'asunto', 'contact', 'tlf', 'tlf2', 'mail', 'mail2', 'observaciones', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
