@extends('layouts.app')

@section('title', 'support')

@section('content')
<section class="section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Dukungan & Bantuan</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Emergency Contact -->
            <div class="bg-red-200 border-l-4 border-red-500 p-6 rounded-lg">
                <h3 class="text-x font-bold text-red-800 mb-4">🚨 Butuh Bantuan Segera?</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <span class="font-bold">Hubungi Hotline:</span>
                        <a href="tel:119" class="text-red-600 font-bold text-lg hover:underline">119</a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="font-bold">WhatsApp:</span>
                        <a href="https://wa.me/628119" class="text-red-600 font-bold hover:underline">+62 8119</a>
                    </div>
                    <p class="text-sm text-red-700">Tersedia 24/7 untuk bantuan darurat</p>
                </div>
            </div>

           <!-- Support Resources -->
<div class="bg-purple-50 p-6 rounded-lg shadow text-center">
    
    <!-- Gambar YouTube di atas -->
    <a href="https://youtube.com/@kejarcita?si=tpSy2K-X6mmplCVR" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" 
             alt="YouTube"
             style="height: 50px; margin: 0 auto 10px;">
    </a>

    <div class="font-semibold text-purple-800 mb-4" style="font-size: 20px;">🔍Butuh Bantuan?</div>  
    <h2 class="font-semibold mb-2">Jangan khawatir! Silakan simak Panduan Lengkap kami untuk memudahkan Anda memahami petunjuk lengkap.</h2>
    <h3>Lihat panduan sekarang untuk mulai lebih mudah.

</h3>
    <!-- Link Panduan -->
    <a href="https://youtube.com/@kejarcita?si=tpSy2K-X6mmplCVR" 
       target="_blank" 
       class="text-blue-600 hover:underline font-bold">
        Baca Panduan →
    </a>
    
</div>

</div>
        </div>

        <div class="text-center mt-8">
            <p class="italic text-gray-500">"Kamu tidak sendiri. Suaramu penting. Bantuan selalu ada." 💙</p>
        </div>
    </div>
</section>
@endsection