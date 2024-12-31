<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HizmetBilgi extends Model
{
    protected $fillable = ['hizmet_kategori_id', 'title', 'description', 'author'];

    public function kategori()
    {
        return $this->belongsToMany(HizmetKategori::class);
    }
}
