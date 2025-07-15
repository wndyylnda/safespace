@extends('layouts.app')

@section('title', 'education')

@section('content')
<section id="education" class="section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Edukasi & Kesadaran</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Mari bersama-sama menciptakan lingkungan yang aman dan bebas dari perundungan melalui edukasi dan kesadaran</p>
        </div>
        
        <!-- Educational Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary">Apa itu Perundungan?</h3>
                </div>
                <div class="space-y-4 text-gray-700">
                    <p class="leading-relaxed">Perundungan adalah perilaku agresif yang disengaja dan berulang yang melibatkan ketidakseimbangan kekuatan. Ini bukan hanya konflik biasa, tetapi pola perilaku yang dapat meninggalkan dampak jangka panjang pada korban.</p>
                    
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h4 class="font-semibold text-primary mb-4">Jenis-jenis Perundungan:</h4>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span>
                                <div>
                                    <strong>Fisik:</strong> memukul, mendorong, merusak barang, menghalangi jalan
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span>
                                <div>
                                    <strong>Verbal:</strong> mengejek, mengancam, menyebar rumor, menghina
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span>
                                <div>
                                    <strong>Sosial:</strong> mengucilkan, mempermalukan di depan umum, mengabaikan
                                </div>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span>
                                <div>
                                    <strong>Cyber:</strong> perundungan melalui media digital, posting konten negatif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary">Tanda-tanda Korban Perundungan</h3>
                </div>
                <div class="space-y-4 text-gray-700">
                    <p class="leading-relaxed">Mengenali tanda-tanda awal perundungan sangat penting untuk dapat memberikan bantuan yang tepat waktu.</p>
                    
                    <div class="bg-red-50 p-6 rounded-lg">
                        <h4 class="font-semibold text-red-700 mb-4">Perhatikan Tanda-tanda Ini:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Perubahan perilaku mendadak</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Tidak mau pergi ke sekolah atau aktivitas</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Kehilangan teman atau aktivitas sosial</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Luka yang tidak bisa dijelaskan</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Kehilangan atau kerusakan barang</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Gangguan tidur atau mimpi buruk</span>
                            </div>
                            <div class="flex items-start">
                                <span class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></span>
                                <span>Penurunan prestasi akademik</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Section -->
        <div class="bg-white p-8 rounded-xl shadow-lg mb-16">
            <h3 class="text-2xl font-semibold text-primary mb-6 text-center">Dampak Perundungan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m4 4v-4a4 4 0 00-4-4H6a4 4 0 00-4 4v4a2 2 0 002 2h12a2 2 0 002-2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Dampak Psikologis</h4>
                    <p class="text-gray-600 text-sm">Kecemasan, depresi, rendah diri, trauma, dan gangguan kepercayaan diri</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Dampak Akademik</h4>
                    <p class="text-gray-600 text-sm">Penurunan prestasi, ketidakhadiran, kesulitan konsentrasi, dan motivasi belajar</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Dampak Sosial</h4>
                    <p class="text-gray-600 text-sm">Isolasi sosial, kehilangan teman, kesulitan membangun hubungan yang sehat</p>
                </div>
            </div>
        </div>

        <!-- Prevention Tips -->
        <div class="bg-gradient-to-r from-green-50 to-blue-50 p-8 rounded-xl mb-16">
            <h3 class="text-2xl font-semibold text-primary mb-6 text-center">Tips Pencegahan Perundungan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-green-700">Untuk Siswa</h4>
                    </div>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li>• Laporkan jika melihat perundungan</li>
                        <li>• Dukung teman yang menjadi korban</li>
                        <li>• Jangan ikut serta dalam perundungan</li>
                        <li>• Cari bantuan dari orang dewasa</li>
                        <li>• Pelajari cara berkomunikasi yang baik</li>
                        <li>• Jadilah pendengar yang baik</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-blue-700">Untuk Orang Tua</h4>
                    </div>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li>• Komunikasi terbuka dengan anak</li>
                        <li>• Pantau aktivitas online anak</li>
                        <li>• Ajarkan empati dan respek</li>
                        <li>• Bekerja sama dengan sekolah</li>
                        <li>• Kenali teman-teman anak</li>
                        <li>• Ciptakan lingkungan rumah yang aman</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-purple-700">Untuk Guru</h4>
                    </div>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li>• Ciptakan lingkungan yang aman</li>
                        <li>• Tanggapi laporan dengan serius</li>
                        <li>• Edukasi tentang perundungan</li>
                        <li>• Libatkan semua pihak</li>
                        <li>• Supervisi area rawan perundungan</li>
                        <li>• Buat kebijakan anti-perundungan</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Action Steps -->
        <div class="bg-white p-8 rounded-xl shadow-lg mb-16">
            <h3 class="text-2xl font-semibold text-primary mb-6 text-center">Langkah-langkah Menghadapi Perundungan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-4">Jika Anda Menjadi Korban:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">1</span>
                            <p class="text-gray-700">Jangan menyalahkan diri sendiri</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">2</span>
                            <p class="text-gray-700">Ceritakan kepada orang dewasa yang dipercaya</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">3</span>
                            <p class="text-gray-700">Dokumentasikan kejadian</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">4</span>
                            <p class="text-gray-700">Hindari situasi yang memungkinkan perundungan</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">5</span>
                            <p class="text-gray-700">Cari dukungan dari teman dan keluarga</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-4">Jika Anda Menjadi Saksi:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">1</span>
                            <p class="text-gray-700">Jangan diam saja</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">2</span>
                            <p class="text-gray-700">Laporkan kepada pihak berwenang</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">3</span>
                            <p class="text-gray-700">Dukung korban dengan aman</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">4</span>
                            <p class="text-gray-700">Jangan ikut menyebarkan gosip</p>
                        </div>
                        <div class="flex items-start">
                            <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-1">5</span>
                            <p class="text-gray-700">Ajak teman lain untuk peduli</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources Section -->
        <div class="bg-gray-50 p-8 rounded-xl">
            <h3 class="text-2xl font-semibold text-primary mb-6 text-center">Sumber Daya & Bantuan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Layanan Konseling</h4>
                    <p class="text-sm text-justify text-gray-600">Jika mengalami perundungan, sebaiknya segera konsultasikan dengan psikolog sekolah atau profesional kesehatan mental. Dukungan mereka bisa membantu menghadapi situasi dengan lebih sehat dan aman</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Hotline Darurat</h4>
                    <p class="text-sm text-justify text-gray-600">Jika kamu atau seseorang yang kamu kenal mengalami perundungan dan merasa terancam, segera hubungi nomor darurat atau layanan crisis center terdekat. Bantuan cepat dan tepat bisa sangat berarti untuk keselamatan dan pemulihan</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Platform Online</h4>
                    <p class="text-sm text-justify text-gray-600">Untuk menghadapi perundungan dengan lebih bijak, kamu bisa mengakses informasi, tips, dan dukungan melalui website atau aplikasi anti-perundungan. Layanan ini dirancang untuk membantu korban merasa lebih didengar, mendapatkan bantuan, dan mengetahui langkah-langkah yang dapat diambil</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-8">
            <div class="bg-primary text-white p-8 rounded-xl">
                <h3 class="text-2xl font-semibold mb-4">Mari Bersama Lawan Perundungan!</h3>
                <p class="text-lg mb-6">Setiap orang memiliki peran penting dalam menciptakan lingkungan yang aman dan bebas dari perundungan.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#report" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                        Laporkan Kasus
                    </a>
                    <a href="#support" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition duration-300">
                        Cari Dukungan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection