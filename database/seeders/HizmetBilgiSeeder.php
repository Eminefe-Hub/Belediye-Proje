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
            ['hizmet_kategori_id' => 3, 'title' => 'Para Yardımı', 'description' => 'Maddi destek sağlanarak ihtiyaç sahiplerine yardım.', 'author' => 'Belediye Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 4, 'title' => 'Gıda Yardımı', 'description' => 'İhtiyaç sahiplerine temel gıda malzemeleri temini.', 'author' => 'Belediye Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 5, 'title' => 'Sağlık Yardımı', 'description' => 'Tıbbi malzeme ve ilaç yardımları.', 'author' => 'Sağlık Dairesi'],
            ['hizmet_kategori_id' => 7, 'title' => 'Konser Organizasyonu', 'description' => 'Ünlü sanatçıların katılımıyla düzenlenen müzik etkinlikleri.', 'author' => 'Kültür ve Sanat Dairesi'],
            ['hizmet_kategori_id' => 8, 'title' => 'Toplu Yemek Etkinlikleri', 'description' => 'Toplumsal kaynaşmayı sağlamak amacıyla düzenlenen yemek programları.', 'author' => 'Sosyal Hizmetler Müdürlüğü'],
            ['hizmet_kategori_id' => 9, 'title' => 'Futbol Turnuvası', 'description' => 'Gençler için düzenlenen spor etkinlikleri.', 'author' => 'Spor ve Gençlik Hizmetleri'],
            ['hizmet_kategori_id' => 12, 'title' => 'Kışlık Kıyafet Bağışı', 'description' => 'İhtiyaç sahiplerine kışlık giysi temin edilmesi.', 'author' => 'Sosyal Yardımlaşma Vakfı'],
            ['hizmet_kategori_id' => 13, 'title' => 'Kitap Toplama Kampanyası', 'description' => 'Kütüphanelere ve okullara kitap bağışının teşvik edilmesi.', 'author' => 'Kültür ve Sanat Dairesi'],
            ['hizmet_kategori_id' => 14, 'title' => 'Eğitim Yardımları', 'description' => 'Öğrencilere burs ve eğitim materyali temini.', 'author' => 'Eğitim ve Gençlik Komisyonu'],
            ['hizmet_kategori_id' => 15, 'title' => 'Teknoloji Bağış Kampanyası', 'description' => 'Bilgisayar ve tablet bağışları ile eğitime destek sağlanması.', 'author' => 'Teknoloji Geliştirme Müdürlüğü'],
                ['hizmet_kategori_id' => 16, 'title' => 'Ağaç Dikme Kampanyası', 'description' => 'Yeşil alanların artırılması amacıyla fidan dikimi.', 'author' => 'Çevre ve Orman Müdürlüğü'],
                ['hizmet_kategori_id' => 17, 'title' => 'Temizlik Kampanyası', 'description' => 'Şehir genelinde temizlik bilinci oluşturmak için etkinlikler.', 'author' => 'Çevre ve Temizlik Birimi'],
                ['hizmet_kategori_id' => 18, 'title' => 'Hayvan Barınağı Yardımı', 'description' => 'Barınaklardaki hayvanların bakım ve beslenme ihtiyaçlarının karşılanması.', 'author' => 'Veteriner İşleri Müdürlüğü'],
                ['hizmet_kategori_id' => 19, 'title' => 'Kariyer Danışmanlığı', 'description' => 'İş arayanlar için rehberlik ve danışmanlık hizmetleri.', 'author' => 'İstihdam ve Kariyer Merkezi'],
                ['hizmet_kategori_id' => 20, 'title' => 'Engelli Destek Programı', 'description' => 'Engelli bireylere yönelik destek ve eğitim programları.', 'author' => 'Engelli Hizmetleri Müdürlüğü'],
                ['hizmet_kategori_id' => 21, 'title' => 'Spor Ekipmanları Bağışı', 'description' => 'Spor kulüplerine ve okullara ekipman desteği.', 'author' => 'Spor ve Gençlik Hizmetleri'],
                ['hizmet_kategori_id' => 22, 'title' => 'Kan Bağışı Kampanyası', 'description' => 'Sağlık kurumlarıyla iş birliği içinde kan bağışı organizasyonları.', 'author' => 'Sağlık Dairesi'],
                ['hizmet_kategori_id' => 23, 'title' => 'Kadın Destek Merkezi', 'description' => 'Kadınlara yönelik sosyal ve psikolojik destek hizmetleri.', 'author' => 'Sosyal Hizmetler Müdürlüğü'],
                ['hizmet_kategori_id' => 24, 'title' => 'Mesleki Eğitim Kursları', 'description' => 'İş gücü piyasasına yönelik mesleki eğitim ve sertifikasyon programları.', 'author' => 'Eğitim ve İstihdam Merkezi'],
                ['hizmet_kategori_id' => 25, 'title' => 'Deprem Yardım Kampanyası', 'description' => 'Afet bölgelerine yardım malzemesi temini ve destek.', 'author' => 'Afet ve Acil Durum Yönetimi Müdürlüğü'],
                ['hizmet_kategori_id' => 26, 'title' => 'Geri Dönüşüm Projeleri', 'description' => 'Çevre bilincini artırmak ve geri dönüşümü teşvik etmek.', 'author' => 'Çevre ve Geri Dönüşüm Müdürlüğü'],
                ['hizmet_kategori_id' => 27, 'title' => 'Ücretsiz Hukuki Danışmanlık', 'description' => 'Vatandaşlara ücretsiz hukuki destek sağlanması.', 'author' => 'Hukuk İşleri Müdürlüğü'],
                ['hizmet_kategori_id' => 28, 'title' => 'Tiyatro Gösterimleri', 'description' => 'Sanatı teşvik etmek amacıyla ücretsiz tiyatro etkinlikleri.', 'author' => 'Kültür ve Sanat Dairesi'],
                ['hizmet_kategori_id' => 29, 'title' => 'Yaşlı Bakım Hizmetleri', 'description' => 'Yaşlı bireylere evde bakım ve destek hizmetleri.', 'author' => 'Sosyal Hizmetler Müdürlüğü'],
                ['hizmet_kategori_id' => 30, 'title' => 'Çocuk Şenlikleri', 'description' => 'Çocuklara yönelik eğlenceli etkinlikler ve oyunlar.', 'author' => 'Sosyal Hizmetler Müdürlüğü'],
                ['hizmet_kategori_id' => 31, 'title' => 'Bisiklet Dağıtım Kampanyası', 'description' => 'Sağlıklı yaşamı teşvik etmek amacıyla bisiklet dağıtımı.', 'author' => 'Spor ve Gençlik Hizmetleri'],
                ['hizmet_kategori_id' => 32, 'title' => 'İş Kurma Destek Programı', 'description' => 'Girişimcilere mali ve eğitim desteği sağlanması.', 'author' => 'Ekonomi ve Kalkınma Müdürlüğü'],
                ['hizmet_kategori_id' => 33, 'title' => 'Gönüllülük Programları', 'description' => 'Toplum yararına projelerde gönüllü katılım teşvik edilmesi.', 'author' => 'Sosyal Hizmetler Müdürlüğü'],
                ['hizmet_kategori_id' => 34, 'title' => 'Doğa Yürüyüşleri', 'description' => 'Sağlıklı yaşam ve çevre bilincini artırmak için doğa yürüyüşleri düzenlenmesi.', 'author' => 'Spor ve Gençlik Hizmetleri'],
                ['hizmet_kategori_id' => 35, 'title' => 'Sanat Atölyeleri', 'description' => 'Sanatsal becerilerin geliştirilmesine yönelik atölye çalışmaları.', 'author' => 'Kültür ve Sanat Dairesi'],

        ];

        foreach ($bilgiler as $bilgi) {
            HizmetBilgi::create($bilgi);
        }
    }
}
