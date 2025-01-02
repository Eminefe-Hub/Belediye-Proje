<?php

namespace database\seeders;
use App\Models\SakinlerBilgi;
use Illuminate\Database\Seeder;

class SakinlerBilgiSeeder extends Seeder
{
    public function run()
    {
        SakinlerBilgi::create([
            'ad' => 'Teemo',
            'soyad' => 'Bandle',
            'telefon' => '5551234567',
            'email' => 'teemo.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/teemo.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Tristana',
            'soyad' => 'Bandle',
            'telefon' => '5552345678',
            'email' => 'tristana.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/tristana.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Lulu',
            'soyad' => 'Fey',
            'telefon' => '5553456789',
            'email' => 'lulu.fey@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/lulu.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Heimerdinger',
            'soyad' => 'Bandle',
            'telefon' => '5554567890',
            'email' => 'heimerdinger.noxus@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/heimerdinger.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Poppy',
            'soyad' => 'Bandle',
            'telefon' => '5555678901',
            'email' => 'poppy.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/poppy.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Ziggs',
            'soyad' => 'Bandle',
            'telefon' => '5556789012',
            'email' => 'ziggs.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/ziggs.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Rumble',
            'soyad' => 'Bandle',
            'telefon' => '5557890123',
            'email' => 'rumble.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/rumble.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Veigar',
            'soyad' => 'Bandle',
            'telefon' => '5558901234',
            'email' => 'veigar.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/veigar.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Kennen',
            'soyad' => 'Bandle',
            'telefon' => '5559012345',
            'email' => 'kennen.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/kennen.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Yuumi',
            'soyad' => 'Bandle',
            'telefon' => '5550123456',
            'email' => 'yuumi.bandle@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/yuumi.jpg'
        ]);

        SakinlerBilgi::create([
            'ad' => 'Bard',
            'soyad' => 'Fey',
            'telefon' => '5551230987',
            'email' => 'bard.fey@example.com',
            'adres' => 'Bandle City, Runeterra',
            'resim' => 'images/bard.jpg'
        ]);
    }
}
