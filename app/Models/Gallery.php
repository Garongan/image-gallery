<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'size',
        'extension',
        'user_id',
        'path'
    ];

    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
