<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belediye ve Şehir Planlama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Trebuchet MS', sans-serif;
            background-color: #f4f1ea;
            color: #4a3f35;
        }
        header {
            background: linear-gradient(135deg, #6a994e, #386641);
        }
        footer {
            background: linear-gradient(135deg, #6a994e, #386641);
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #6a994e;
        }
        .btn-primary {
            background-color: #6a994e;
            border: none;
        }
        .btn-primary:hover {
            background-color: #386641;
        }
        .nav-item {
            font-family: "Comic Sans MS", serif;
        }
        .nav-link:hover{
            color: yellow !important;
        }
        h1 {
            font-family: "Comic Sans MS", serif;
        }
        .logo{
            width: 75px;
        }
        .flex-row{
            vertical-align: center !important;
        }
        footer h5 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        footer ul li {
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        footer a {
            font-size: 1.2rem;
            text-decoration: none;
        }

        footer a:hover {
            color: #f7d794;
        }

        .dropdown-menu {
            background-color: #e0f7fa;
            border-color: #004d40;
        }
        .dropdown-menu a {
            color: #004d40;
        }
        .dropdown-menu a:hover {
            background-color: #004d40;
            color: #e0f7fa;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }

    </style>
</head>
<body>
<header class="text-white py-4 shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="d-flex flex-row justify-content-center align-items-center gap-3 nav-link" href="{{route('homepage')}}">
            <img src="./logo.png" width="50px" class="logo" alt="">
            <h1 class="fs-3 fw-bold">Bandle Şehri Belediyesi</h1>
        </a>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link text-white">Ana Sayfa</a></li>
                <li class="nav-item"><a href="{{ route('president') }}" class="nav-link text-white">Başkan</a></li>
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link text-white">Profil</a></li>
                <li class="nav-item"><a href="{{ route('sakinler') }}" class="nav-link text-white">Sakinler</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hizmetler
                    </a>
                    <ul class="dropdown-menu">
                        @if(isset($parent_categories))
                            @foreach($parent_categories as $cat)
                                <li><a class="dropdown-item" href="{{route('hizmetler', $cat->id)}}">{{$cat->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>

                </li>
                {{--                <li class="nav-item"><a href="{{ route('content') }}" class="nav-link text-white">İletişim</a></li>--}}
                {{--                <li class="nav-item"><a href="{{ route('events') }}" class="nav-link text-white">Etkinlikler</a></li>--}}
                @if(!Auth::user())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Giriş Yap</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Kayıt Ol</a></li>
                @else
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        @method('POST')
                        <li class="nav-item"><button class="nav-link text-white">Çıkış Yap</button></li>
                    </form>
                @endif




            </ul>
        </nav>
    </div>
</header>

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./bandlecity.jpg" class="d-block w-100" alt="bandle city">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bandle Şehri</h5>
                <p>Doğanın ve büyünün iç içe geçtiği masalsı bir şehir.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./bandleagac.jpg" class="d-block w-100" alt="bandle tree">
            <div class="carousel-caption d-none d-md-block">
                <h5>Doğayla Bütünleşme</h5>
                <p>Yeşilin ve huzurun adresi.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./bandlestreet.jpg" class="d-block w-100" alt="bandle street">
            <div class="carousel-caption d-none d-md-block">
                <h5>Renkli Sokaklar</h5>
                <p>Canlı kültürü ve neşeli atmosferiyle ünlü sokaklar.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Bandle Şehrine Hoş Geldiniz</h2>
        <p class="lead">Sihirli ve sürdürülebilir projeler ile geleceği birlikte inşa ediyoruz.</p>
    </div>
</section>


@yield('content')

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Şehir Bilgisi -->
            <div class="col-md-4 mb-3">
                <h5>Bandle Şehri Belediyesi</h5>
                <p>Doğa ile uyum içinde, herkes için bir şehir.</p>
            </div>

            <!-- İletişim Bilgileri -->
            <div class="col-md-4 mb-3">
                <h5>İletişim</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt"></i> Yüksektepe Mah., Ormanköy, Bandle Şehri</li>
                    <li><i class="bi bi-telephone"></i> +90 555 123 45 67</li>
                    <li><i class="bi bi-envelope"></i> belediye@bandlesehri.com</li>
                </ul>
            </div>

            <!-- Sosyal Medya -->
            <div class="col-md-4 mb-3">
                <h5>Sosyal Medya</h5>
                <a href="https://www.facebook.com/" class="text-white me-2" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://x.com/" class="text-white me-2" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/" class="text-white me-2" target="_blank"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

        <div class="text-center mt-4">
            <small>© 2024 Bandle Şehri Belediyesi. Tüm hakları saklıdır.</small>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
