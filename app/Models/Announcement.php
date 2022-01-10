<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Announcement extends Model
{
    use HasFactory;

    const BACKEND = 'backend';
    const WEBSITE = 'website';

    protected $fillable = [
        'name','desc','is_new','creater_id','type'
    ];

    protected $casts = [
        'is_new' => 'boolean'
    ];

    public function creater()
        {
        return $this->belongsTo(Uses::class, "creater_id");
        }
}
