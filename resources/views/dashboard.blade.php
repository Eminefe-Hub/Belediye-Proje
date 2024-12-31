<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bandle Şehri Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4 text-center">Bandle Şehri'ne Hoş Geldiniz!</h3>
                    <p class="text-lg text-center mb-6">Şehrimizdeki etkinlikleri, hizmetleri ve fırsatları keşfedin.</p>

                    <!-- Menü Alanı -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <a href="/services" class="block p-6 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                            Etkinlikleri Keşfet
                        </a>
                        <a href="#" class="block p-6 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700">
                            Yardım Programları
                        </a>
                        <a href="#" class="block p-6 bg-purple-500 text-white font-semibold rounded-lg shadow-md hover:bg-purple-700">
                            Şehir Hizmetleri
                        </a>
                    </div>

                    <!-- Duyurular ve Haberler -->
                    <div class="mt-8">
                        <h4 class="text-xl font-semibold mb-4">Güncel Duyurular</h4>
                        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                            <li>Bahar Festivali 15 Nisan'da başlıyor!</li>
                            <li>Yeni kütüphane açılışı için gönüllüler aranıyor.</li>
                            <li>Yaz spor etkinlikleri kayıtları başladı.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
