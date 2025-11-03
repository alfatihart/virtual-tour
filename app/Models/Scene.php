<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hotspot;
use App\Models\Setting;

class Scene extends Model
{
    protected $fillable = [
        'title',
        'hfov',
        'pitch',
        'yaw',
        'image',
        'north_offset',
    ];

    /**
     * Hotspots that belong to this scene as the main/parent scene.
     */
    public function hotspots()
    {
        return $this->hasMany(Hotspot::class, 'main_scene');
    }

    /**
     * Hotspots that target this scene (incoming navigations).
     */
    public function incomingHotspots()
    {
        return $this->hasMany(Hotspot::class, 'target_scene');
    }

    /**
     * The setting that references this scene as the first_scene (nullable).
     */
    public function setting()
    {
        return $this->hasOne(Setting::class, 'first_scene');
    }
}
