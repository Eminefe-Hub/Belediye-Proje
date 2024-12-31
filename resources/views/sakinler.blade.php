@extends('layout')

@section('content')
    <div class="py-12 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <!-- Bandle Şehri Sakinleri Bölümü -->
                    <section class="bg-green-50 py-4 mt-8">
                        <div class="container text-center">
                            <h2 class="display-5 fw-bold mb-4">Bandle Şehri Sakinleri</h2>
                        </div>
                    </section>

                    <div class="row g-4 my-5">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./lulu.jpg" class="card-img-top" alt="haber">
                                <div class="card-body">
                                    <h5 class="card-title">Lulu – Sihirli Destekçi</h5>
                                    <p class="card-text">Lulu, fantastik dünyaları keşfetmeyi seven hayalperest bir yordledir.</p>
                                    <a href="#" class="btn btn-primary">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./veigar.png" class="card-img-top" alt="haber">
                                <div class="card-body">
                                    <h5 class="card-title">Veigar – Minik Usta Karanlık</h5>
                                    <p class="card-text">Veigar, yordle türünün sıradanlığından sıkılarak karanlık büyüye yöneldi.</p>
                                    <a href="#" class="btn btn-primary">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="./tristana.jpg" class="card-img-top" alt="haber">
                                <div class="card-body">
                                    <h5 class="card-title">Tristana – Patlayan Topçu</h5>
                                    <p class="card-text">Bandle Şehri’nin güvenliğini koruma görevini üstlenen Tristana, sevimli ama kararlı bir savaşçıdır.</p>
                                    <a href="#" class="btn btn-primary">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 my-5">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="./corki.webp" class="card-img-top" alt="haber">
                                    <div class="card-body">
                                        <h5 class="card-title">Corki – Cesur Bombardıman Ustası</h5>
                                        <p class="card-text">Corki, Bandle Şehri’nde yaşayan bir havacılık tutkunudur.</p>
                                        <a href="#" class="btn btn-primary">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="./kled.jpg" class="card-img-top" alt="haber">
                                    <div class="card-body">
                                        <h5 class="card-title">Kled – Noxus’un Çılgını</h5>
                                        <p class="card-text"> Kled, Noxus’un savaş alanlarında efsaneleşmiş bir yordle.</p>
                                        <a href="#" class="btn btn-primary">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="./kennen.jpg" class="card-img-top" alt="haber">
                                    <div class="card-body">
                                        <h5 class="card-title">Kennen – Fırtına’nın Kalbi</h5>
                                        <p class="card-text">Ionialı bir ninja olan Kennen, tarikatının en hızlı üyesidir.</p>
                                        <a href="#" class="btn btn-primary">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
