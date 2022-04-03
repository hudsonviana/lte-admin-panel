<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUuid;
    
    protected $fillable = [
        'title'
    ];

    // parâmetros necessários para usar UUID
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;
}
