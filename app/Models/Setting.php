<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Scene;

class Setting extends Model
{
    protected $fillable = [
        'first_scene',
        'author',
        'auto_load',
        'scene_fade',
        'auto_rotate',
        'rotate_delay',
        'compass',
    ];

    /**
     * The scene referenced as the first scene for this setting (nullable).
     */
    public function firstScene()
    {
        return $this->belongsTo(Scene::class, 'first_scene');
    }
}
