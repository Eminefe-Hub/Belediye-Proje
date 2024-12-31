<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HizmetKategori extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(HizmetKategori::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(HizmetKategori::class, 'parent_id');
    }

    public function bilgi()
    {
        return $this->belongsToMany(HizmetBilgi::class);
    }
}
