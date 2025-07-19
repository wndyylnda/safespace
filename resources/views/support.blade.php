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
                        <a href="https://wa.me/628111446777" class="text-red-600 font-bold hover:underline">+62 81114</a>
                    </div>
                    <p class="text-sm text-red-700">Tersedia 24/7 untuk bantuan darurat</p>
                </div>
            </div>

           <!-- Support Resources -->
<div class="bg-purple-200 p-6 rounded-lg shadow text-center">
    
    <!-- Gambar YouTube di atas -->
    <a href="https://youtube.com/@kejarcita?si=tpSy2K-X6mmplCVR" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" 
             alt="YouTube"
             style="height: 20px; margin: 7px 10px;">
    </a>

    <div class="font-bold text-purple-800 mb-4" style="font-size: 20px height: 20px; margin: 12px 20px 9px -320px">🔍Butuh Bantuan? </div>  
    <h2 class="font-bold mb-2">Jangan khawatir! Silakan simak Panduan Lengkap kami untuk memudahkan Anda memahami petunjuk lengkap.</h2>
    <h3>Lihat panduan sekarang untuk mulai lebih mudah. </h3>
    

</h3>
    <!-- Link Panduan -->
    <a href="https://youtube.com/@kejarcita?si=tpSy2K-X6mmplCVR" 
       target="_blank" 
       class="text-blue-600 hover:underline font-bold">
        Baca Panduan →
    </a>
    
</div>
<!-- About Section -->
                <section class="bg-purple-100 rounded-lg p-6 hover:shadow-md transition duration-300">
                    <h3 class="font-bold text-lg mb-3">Buku Rekomendasi</h3>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d8ae8cd3-b32d-491b-a492-4cc64aceb424.png" alt="Tumpukan buku tentang psikologi anak dan penanganan bullying dengan cover berwarna cerah" class="w-full h-auto rounded mb-4">
                    <p class="text-gray-700 mb-4">Daftar buku terbaik untuk memahami dan mengatasi perundungan.</p>
                    <a href="#" class="text-indigo-600 font-medium">Lihat Daftar</a>
</div>
</section>
</div>
        </div>

        <div class="text-center mt-8">
            <p class="italic text-gray-500">"Kamu tidak sendiri. Suaramu penting. Bantuan selalu ada." 💙</p>
        </div>
    </div>
</section>
@endsection