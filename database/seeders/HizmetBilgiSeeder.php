<?php

namespace Database\Seeders;

use App\Models\HizmetBilgi;
use Illuminate\Database\Seeder;

class HizmetBilgiSeeder extends Seeder
{
    public function run(): void
    {
        $bilgiler = [

            ['hizmet_kategori_id' => 2, 'title' => 'Kütüphane Bağışı', 'description' => 'Yeni kitaplar ve materyaller temin edilmesi.', 'author' => 'Kültür ve Sanat Dairesi'],
            ['hizmet_kategori_id' => 2, 'title' => 'Çocuk Kitapları Bağışı', 'description' => 'Okul öncesi çocuklar için kitap bağışı.', 'author' => 'Eğitim Dairesi'],

            // Para Yardımı
            ['hizmet_kategori_id' => 3, 'title' => 'Acil Para Yardımı', 'description' => 'Acil durumlar için maddi yardım desteği.', 'author' => 'Belediye Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 3, 'title' => 'Eğitim İçin Para Yardımı', 'description' => 'Eğitim harcamaları için maddi destek sağlanması.', 'author' => 'Eğitim ve Gençlik Komisyonu'],

            // Gıda Yardımı
            ['hizmet_kategori_id' => 4, 'title' => 'Yardım Gıda Paketleri', 'description' => 'İhtiyaç sahiplerine gıda paketi temini.', 'author' => 'Belediye Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 4, 'title' => 'Ramazan Gıda Yardımı', 'description' => 'Ramazan ayında ihtiyaç sahiplerine gıda yardım paketi.', 'author' => 'Sosyal Yardımlaşma Vakfı'],

            // Sağlık Yardımı
            ['hizmet_kategori_id' => 5, 'title' => 'Acil Sağlık Yardımı', 'description' => 'Acil durumlar için tıbbi malzeme temini.', 'author' => 'Sağlık Dairesi'],
            ['hizmet_kategori_id' => 5, 'title' => 'Göz Tedavi Yardımı', 'description' => 'Göz hastalıkları için tedavi ve malzeme desteği.', 'author' => 'Sağlık Dairesi'],

            // Konser Etkinlikleri
            ['hizmet_kategori_id' => 7, 'title' => 'Ünlü Sanatçı Konseri', 'description' => 'Ünlü sanatçılarla konser etkinliği düzenlenmesi.', 'author' => 'Kültür ve Sanat Dairesi'],
            ['hizmet_kategori_id' => 7, 'title' => 'Çocuk Konseri', 'description' => 'Çocuklara yönelik konser etkinliği.', 'author' => 'Eğitim ve Gençlik Komisyonu'],

            // Yemek Etkinlikleri
            ['hizmet_kategori_id' => 8, 'title' => 'Toplu İftar Etkinliği', 'description' => 'Ramazan ayında düzenlenen toplu iftar organizasyonu.', 'author' => 'Belediye Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 8, 'title' => 'Açık Hava Pikniği', 'description' => 'Açık hava pikniği düzenlenerek toplumsal kaynaşma sağlanması.', 'author' => 'Kültür ve Sanat Dairesi'],

            // Spor Etkinlikleri
            ['hizmet_kategori_id' => 9, 'title' => 'Futbol Turnuvası', 'description' => 'Gençler için düzenlenen futbol turnuvası.', 'author' => 'Spor ve Gençlik Hizmetleri'],
            ['hizmet_kategori_id' => 9, 'title' => 'Basketbol Turnuvası', 'description' => 'Gençler için basketbol turnuvası düzenlenmesi.', 'author' => 'Spor ve Gençlik Hizmetleri'],

            // Kıyafet Bağışı
            ['hizmet_kategori_id' => 12, 'title' => 'Kışlık Kıyafet Bağışı', 'description' => 'İhtiyaç sahiplerine kışlık giysi temin edilmesi.', 'author' => 'Sosyal Yardımlaşma Vakfı'],
            ['hizmet_kategori_id' => 12, 'title' => 'Yazlık Kıyafet Bağışı', 'description' => 'İhtiyaç sahiplerine yazlık giysi temin edilmesi.', 'author' => 'Sosyal Yardımlaşma Vakfı'],

            // Kitap Bağışı
            ['hizmet_kategori_id' => 13, 'title' => 'Kitap Toplama Kampanyası', 'description' => 'Kütüphanelere ve okullara kitap bağışının teşvik edilmesi.', 'author' => 'Kültür ve Sanat Dairesi'],
            ['hizmet_kategori_id' => 13, 'title' => 'Okullara Kitap Bağışı', 'description' => 'Okullarda kitap eksikliği çeken öğrencilere kitap bağışı.', 'author' => 'Eğitim Dairesi'],

            // Eğitim Yardımları
            ['hizmet_kategori_id' => 14, 'title' => 'Burs Yardımı', 'description' => 'Öğrencilere verilen eğitim bursları.', 'author' => 'Eğitim ve Gençlik Komisyonu'],
            ['hizmet_kategori_id' => 14, 'title' => 'Eğitim Materyali Yardımı', 'description' => 'Öğrencilere ders kitapları ve eğitim materyali temini.', 'author' => 'Eğitim Dairesi'],

            // Teknoloji Bağışları
            ['hizmet_kategori_id' => 15, 'title' => 'Tablet Bağışı', 'description' => 'Öğrencilere tablet ve eğitim cihazı temini.', 'author' => 'Teknoloji Geliştirme Müdürlüğü'],
            ['hizmet_kategori_id' => 15, 'title' => 'Bilgisayar Bağışı', 'description' => 'Okullar ve öğrencilere bilgisayar bağışı yapılması.', 'author' => 'Teknoloji Geliştirme Müdürlüğü'],
        ];

        foreach ($bilgiler as $bilgi) {
            HizmetBilgi::create($bilgi);
        }
    }
}
