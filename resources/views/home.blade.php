@extends('layouts.app')

@section('title', 'home')

@section('content')
<section class="bg-gradient-to-r from-purple-500 to-purple-700 text-white py-12 sm:py-16 lg:py-20 xl:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 sm:mb-6 leading-tight">Bersama Melawan Perundungan</h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 max-w-4xl mx-auto leading-relaxed">Menciptakan lingkungan yang aman dan mendukung untuk semua orang. Mari bersatu melawan perundungan!</p>
        <div class="flex flex-col xs:flex-row gap-3 sm:gap-4 justify-center items-center max-w-md xs:max-w-none mx-auto">
            <button onclick="showSection('education')" class="w-full xs:w-auto bg-white text-purple-700 px-6 sm:px-8 py-2.5 sm:py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors text-sm sm:text-base">Pelajari Lebih Lanjut</button>
            <button onclick="showSection('support')" class="w-full xs:w-auto border-2 border-white text-white px-6 sm:px-8 py-2.5 sm:py-3 rounded-full font-semibold hover:bg-white hover:text-purple-700 transition-colors text-sm sm:text-base">Butuh Bantuan?</button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<div class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8 text-center">
            <div class="p-4 sm:p-6">
                <div class="text-3xl sm:text-4xl font-bold text-purple-700 mb-2">1000+</div>
                <div class="text-gray-600 text-sm sm:text-base">Siswa Terbantu</div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="text-3xl sm:text-4xl font-bold text-purple-700 mb-2">50+</div>
                <div class="text-gray-600 text-sm sm:text-base">Sekolah Partner</div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="text-3xl sm:text-4xl font-bold text-purple-700 mb-2">24/7</div>
                <div class="text-gray-600 text-sm sm:text-base">Dukungan Tersedia</div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-12 sm:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-8 sm:mb-12">Fitur Utama SafeSpace</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-purple-700 text-3xl sm:text-4xl mb-4">📚</div>
                <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Edukasi & Kesadaran</h3>
                <p class="text-gray-600 text-sm sm:text-base">Materi lengkap tentang perundungan, cara mencegah, dan membangun kesadaran di komunitas.</p>
            </div>
            <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-purple-700 text-3xl sm:text-4xl mb-4">💬</div>
                <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Forum Komunitas</h3>
                <p class="text-gray-600 text-sm sm:text-base">Tempat aman untuk berbagi pengalaman, bertanya, dan saling mendukung antar anggota komunitas.</p>
            </div>
            <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow md:col-span-2 lg:col-span-1">
                <div class="text-purple-700 text-3xl sm:text-4xl mb-4">🤝</div>
                <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Dukungan 24/7</h3>
                <p class="text-gray-600 text-sm sm:text-base">Tim konselor profesional siap membantu kapan saja Anda membutuhkan dukungan.</p>
            </div>
        </div>
    </div>
</div>
@endsection