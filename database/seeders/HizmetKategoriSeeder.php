<?php

namespace database\seeders;

use App\Models\HizmetKategori;
use Illuminate\Database\Seeder;

class HizmetKategoriSeeder extends Seeder
{
    public function run()
    {
        $kategoriler = [
            ['name' => 'Yardımlar', 'parent_id' => null],
            ['name' => 'Kütüphane Yardımı', 'parent_id' => 1],
            ['name' => 'Para Yardımı', 'parent_id' => 1],
            ['name' => 'Gıda Yardımı', 'parent_id' => 1],
            ['name' => 'Sağlık Yardımı', 'parent_id' => 1],
            ['name' => 'Etkinlikler', 'parent_id' => null],
            ['name' => 'Konser Etkinlikleri', 'parent_id' => 6],
            ['name' => 'Yemek Etkinlikleri', 'parent_id' => 6],
            ['name' => 'Spor Etkinlikleri', 'parent_id' => 6],
            ['name' => 'Sanat Etkinlikleri', 'parent_id' => 6],
            ['name' => 'Bağış Kampanyaları', 'parent_id' => null],
            ['name' => 'Kıyafet Bağışı', 'parent_id' => 11],
            ['name' => 'Kitap Bağışı', 'parent_id' => 11],
            ['name' => 'Eğitim Yardımları', 'parent_id' => 11],
            ['name' => 'Tıbbi Yardımlar', 'parent_id' => 11],
            ['name' => 'Teknoloji Bağışları', 'parent_id' => 11],
        ];

        foreach ($kategoriler as $kategori) {
            HizmetKategori::create($kategori);
        }
    }
}
