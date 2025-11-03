<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Scene;

class Hotspot extends Model
{
    protected $fillable = [
        'main_scene',
        'type',
        'pitch',
        'yaw',
        'text',
        'target_scene',
        'url',
    ];

    /**
     * The scene this hotspot belongs to (main_scene).
     */
    public function mainScene()
    {
        return $this->belongsTo(Scene::class, 'main_scene');
    }

    /**
     * The target scene this hotspot navigates to (nullable).
     */
    public function targetScene()
    {
        return $this->belongsTo(Scene::class, 'target_scene');
    }
}
