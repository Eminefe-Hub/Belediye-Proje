@extends('layout')

@section('content')

    <h1 class="text-center my-4">Hizmet Bilgisi</h1>

    <!-- Üst kategori seçme barı -->
    <div class="d-flex justify-content-center mb-4">
        <div class="btn-group" role="group" aria-label="Kategori Seçimi">
            @foreach($sub_categories as $category)
                <button type="button" class="btn btn-outline-primary {{ request('id') == $category->id ? 'active' : '' }}"
                        onclick="filterHizmetler({{ $category->id }})">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Hizmet bilgileri -->
    <div id="hizmet-bilgileri" class="container mb-5">
        @if(isset($bilgiler) && $bilgiler->count() > 0)
            <div class="row row-cols-1 row-cols-md-2 g-4" id="bilgiler-container">
                @foreach($bilgiler as $bilgi)
                    <div class="col bilgi" data-category-id="{{ $bilgi->hizmet_kategori_id }}">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bilgi->title }}</h5>
                                <p class="card-text">{{ $bilgi->description }}</p>
                                <p class="text-muted small">Yazar: {{ $bilgi->author }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-muted">Bu kategoriye ait bilgi bulunmamaktadır.</p>
        @endif
    </div>

    <script>
        // Filtreleme fonksiyonu
        function filterHizmetler(categoryId) {
            // Tüm bilgiler
            let bilgiler = document.querySelectorAll('.bilgi');

            bilgiler.forEach(function(bilgi) {
                // Her bilginin category_id'sini al
                let category = bilgi.getAttribute('data-category-id');

                // Kategori ID'ye göre filtreleme
                if (category == categoryId || categoryId === undefined) {
                    bilgi.style.display = 'block'; // Göster
                } else {
                    bilgi.style.display = 'none'; // Gizle
                }
            });
        }
    </script>
@endsection


