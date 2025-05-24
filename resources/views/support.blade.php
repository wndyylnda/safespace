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

                    <!-- Chat Support -->
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl font-semibold text-primary mb-4">💬 Chat dengan Konselor</h3>
                        <p class="text-gray-600 mb-4">Bicara dengan konselor profesional kami secara anonim</p>
                        <button onclick="startChat()" class="w-full bg-primary text-white py-3 rounded-lg hover:bg-blue-600 transition-colors font-semibold">Mulai Chat Sekarang</button>
                        <p class="text-xs text-gray-500 mt-2 text-center">Rata-rata waktu respons: 2 menit</p>
                    </div>
                </div>

                <!-- Support Resources -->
                <div class="mt-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-900 mb-8">Sumber Daya Dukungan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <div class="text-primary text-3xl mb-4">📱</div>
                            <h4 class="font-semibold mb-2">Aplikasi Mobile</h4>
                            <p class="text-gray-600 text-sm mb-4">Download aplikasi SafeSpace untuk akses bantuan kapan saja</p>
                            <button class="text-primary hover:underline text-sm">Download Sekarang →</button>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <div class="text-primary text-3xl mb-4">📖</div>
                            <h4 class="font-semibold mb-2">Panduan Self-Help</h4>
                            <p class="text-gray-600 text-sm mb-4">Materi dan strategi untuk mengatasi perundungan sendiri</p>
                            <button class="text-primary hover:underline text-sm">Baca Panduan →</button>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl shadow-lg">
                            <div class="text-primary text-3xl mb-4">👥</div>
                            <h4 class="font-semibold mb-2">Support Group</h4>
                            <p class="text-gray-600 text-sm mb-4">Bergabung dengan grup dukungan mingguan</p>
                            <button class="text-primary hover:underline text-sm">Daftar Grup →</button>
                        </div>
                    </div>
                </div>

                <!-- Chat Interface (Hidden by default) -->
                <div id="chat-interface" class="hidden mt-8 bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-primary text-white p-4 flex justify-between items-center">
                        <h4 class="font-semibold">Chat dengan Konselor</h4>
                        <button onclick="closeChat()" class="text-white hover:text-gray-200">✕</button>
                    </div>
                    <div id="chat-messages" class="h-64 overflow-y-auto p-4 space-y-3">
                        <div class="flex items-start space-x-2">
                            <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white text-sm">K</div>
                            <div class="bg-gray-100 p-3 rounded-lg flex-1">
                                <p class="text-sm">Halo! Saya konselor Sarah. Bagaimana saya bisa membantu Anda hari ini?</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <div class="flex space-x-2">
                            <input type="text" id="chat-input" class="flex-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Ketik pesan Anda...">
                            <button onclick="sendMessage()" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection