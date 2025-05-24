 @extends('layouts.app')

 @section('title', 'support')

 @section('content')
<section class="section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Dukungan & Bantuan</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Emergency Contact -->
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-red-800 mb-4">🚨 Butuh Bantuan Segera?</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <span class="font-semibold">Hotline Krisis:</span>
                                <a href="tel:119" class="text-red-600 font-bold text-lg hover:underline">119</a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="font-semibold">WhatsApp:</span>
                                <a href="https://wa.me/628119" class="text-red-600 font-bold hover:underline">+62 8119</a>
                            </div>
                            <p class="text-sm text-red-700">Tersedia 24/7 untuk bantuan darurat</p>
                        </div>
                    </div>

                     <!-- Support Resources -->
                    <div style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 40px; width: 600px; background-color: #EDE9FE;">
                            <div style="font-size: 40px;">📖</div>
                            <h3 style="margin: 10px 0 5px;">Panduan Self-Help</h3>
                            <h3>Materi dan strategi untuk mengatasi perundungan sendiri</h3>
                            
                            <a href="https://youtube.com/@kejarcita?si=tpSy2K-X6mmplCVR" target="_blank" style="color: #000; text-decoration: none; font-weight: bold;">Baca Panduan → </a>
                        </div>
                        <div class="text-center">
                            <p class="italic text-gray-500">"Kamu tidak sendiri. Suaramu penting. Bantuan selalu ada." 💙</p>
                        </div>

            </div>
            
        </section>
@endsection