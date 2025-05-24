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
     <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
</div>

@endsection