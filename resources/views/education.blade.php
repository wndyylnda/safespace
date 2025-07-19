@extends('layouts.app')

@section('title', 'education')

@section('content')
<section id="education" class="section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Edukasi & Kesadaran</h2>
                
                <!-- Educational Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-semibold text-primary mb-6">Apa itu Perundungan?</h3>
                        <div class="space-y-4 text-gray-700">
                            <p>Perundungan adalah perilaku agresif yang disengaja dan berulang yang melibatkan ketidakseimbangan kekuatan.</p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-primary mb-2">Jenis-jenis Perundungan:</h4>
                                <ul class="list-disc list-inside space-y-1">
                                    <li>Fisik: memukul, mendorong, merusak barang</li>
                                    <li>Verbal: mengejek, mengancam, menyebar rumor</li>
                                    <li>Sosial: mengucilkan, mempermalukan di depan umum</li>
                                    <li>Cyber: perundungan melalui media digital</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-semibold text-primary mb-6">Tanda-tanda Korban Perundungan</h3>
                        <div class="space-y-4 text-gray-700">
                            <div class="bg-red-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-700 mb-2">Perhatikan Tanda-tanda Ini:</h4>
                                <ul class="list-disc list-inside space-y-1">
                                    <li>Perubahan perilaku mendadak</li>
                                    <li>Tidak mau pergi ke sekolah</li>
                                    <li>Kehilangan teman atau aktivitas sosial</li>
                                    <li>Luka yang tidak bisa dijelaskan</li>
                                    <li>Kehilangan atau kerusakan barang</li>
                                    <li>Gangguan tidur atau mimpi buruk</li>
                                    <li>Penurunan prestasi akademik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prevention Tips -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-semibold text-primary mb-6 text-center">Tips Pencegahan Perundungan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-green-700 mb-3">Untuk Siswa</h4>
                            <ul class="text-sm space-y-2">
                                <li>• Laporkan jika melihat perundungan</li>
                                <li>• Dukung teman yang menjadi korban</li>
                                <li>• Jangan ikut serta dalam perundungan</li>
                                <li>• Cari bantuan dari orang dewasa</li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-blue-700 mb-3">Untuk Orang Tua</h4>
                            <ul class="text-sm space-y-2">
                                <li>• Komunikasi terbuka dengan anak</li>
                                <li>• Pantau aktivitas online anak</li>
                                <li>• Ajarkan empati dan respek</li>
                                <li>• Bekerja sama dengan sekolah</li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-purple-700 mb-3">Untuk Guru</h4>
                            <ul class="text-sm space-y-2">
                                <li>• Ciptakan lingkungan yang aman</li>
                                <li>• Tanggapi laporan dengan serius</li>
                                <li>• Edukasi tentang perundungan</li>
                                <li>• Libatkan semua pihak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection