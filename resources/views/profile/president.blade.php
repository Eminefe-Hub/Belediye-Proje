<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belediye Başkanı</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #e0f7fa;
            color: #004d40;
        }
        header {
            background: linear-gradient(90deg, #00695c, #004d40);
            color: #ffffff;
            padding: 20px 0;
        }
        header h1 {
            font-size: 2.8rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        section h2 {
            font-size: 2rem;
            color: #00695c;
            border-bottom: 3px solid #004d40;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        footer {
            background: #004d40;
            color: #e0f7fa;
            padding: 15px 0;
        }
        footer p {
            margin: 0;
        }
        address {
            font-style: normal;
            line-height: 1.8;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 0.75rem;
        }
        a {
            color: #00796b;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .profile-image {
            float: left;
            margin-right: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .bio-section {
            overflow: hidden;
        }
    </style>
</head>
<body>

<header>
    <ul class="nav">
        <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link text-white">Ana Sayfa</a></li>
        <li class="nav-item"><a href="{{ route('president') }}" class="nav-link text-white">Başkan</a></li>
        <li class="nav-item"><a href="{{ route('services') }}" class="nav-link text-white">Hizmetler</a></li>
        {{--                <li class="nav-item"><a href="{{ route('content') }}" class="nav-link text-white">İletişim</a></li>--}}
        {{--                <li class="nav-item"><a href="{{ route('events') }}" class="nav-link text-white">Etkinlikler</a></li>--}}
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Giriş Yap</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Kayıt Ol</a></li>



    </ul>




</header>

<h1 class="text-center">
    <div class="container">
        <h1>Bandle Şehri Belediye Başkanı Tristana</h1>
    </div>
</h1>

<main class="container my-5">
    <section class="mb-5">
        <h2>Başkanın Mesajı</h2>
        <p>Sevgili Bandle halkı, cesaret ve azimle şehrimizin geleceğini aydınlatmak için çalışıyoruz! Sizlerin desteğiyle, Bandle’yi tüm Runeterra’nın parlayan yıldızı yapacağız.</p>
    </section>

    <section class="mb-5">
        <h2>Başkanın Biyografisi</h2>
        <ul>
            <li><strong>Adı :</strong> Tristana</li>
            <li><strong>Doğum Yeri:</strong> Bandle City</li>
            <li><strong>Uzmanlık Alanı:</strong> Toplum Güçlendirme ve Savunma Stratejileri</li>
            <li><strong>Görev Süresi:</strong> 2009 - Günümüz</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2>Başkanın Özgeçmişi</h2>
        <div class="bio-section d-flex flex-column justify-content-center align-items-center">
            <img src="./tristana.jpg" alt="Başkan Tristana'nın Fotoğrafı" class="profile-image mb-4" width="500">
            <div>
                <p>Tristana, Bandle Şehri’nin cesur lideri olarak bilinir. Küçüklüğünden beri savaş alanlarında kazandığı deneyimlerle, halkını koruma ve onlara ilham verme konularında öne çıkmıştır. Tristana, sadece bir savaşçı değil, aynı zamanda şehrini dönüştüren bir vizyonerdir. Göreve gelmeden önce Bandle City’nin savunma kuvvetlerinde yıllarca liderlik yaptı ve birçok başarıya imza attı.</p>

                <p>Belediye Başkanı olarak, Tristana ekonomik kalkınmayı teşvik etmek, eğitim sistemini güçlendirmek ve şehrin güvenliğini artırmak için cesur reformlar gerçekleştirmiştir. Halkın refahı için "Barış ve Güç Dengesi" adlı devrim niteliğinde bir program başlatmış ve şehirde girişimciliği desteklemek için yeni teşvikler sunmuştur.</p>

                <p>Tristana, Bandle’nin doğal güzelliklerini korumak ve şehir kültürünü tanıtmak için turizm projelerine öncelik vermiştir. Onun liderliğinde, Bandle, Runeterra’nın en hızlı büyüyen bölgelerinden biri olmuştur. Sıklıkla, "En büyük başarı halkın mutluluğudur" sözüyle tanınır ve bu ilkeyle hareket eder.</p>
            </div>
            </div>
    </section>


</main>

<footer>

    <section>
        <h2>İletişim Bilgileri</h2>
        <address>
            <strong>Adres:</strong> Belediye Binası, Merkez Mahallesi, Bandle Şehri<br>
            <strong>Telefon:</strong> (0212) 123 45 67<br>
            <strong>E-posta:</strong> tristana@bandle.gov.tr
        </address>
    </section>

    <div class="container text-center">
        <p>&copy; 2024 Bandle Şehri Belediyesi. Tüm Hakları Saklıdır.</p>
    </div>

</footer>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
