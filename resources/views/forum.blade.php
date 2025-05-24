@extends('layouts.app')

@section('title', 'forum')

@section('content')
<section class="section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Forum Komunitas</h2>
                
                <!-- Forum Categories -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="showForumCategory('general')">
                        <div class="text-primary text-3xl mb-4">💬</div>
                        <h3 class="text-xl font-semibold mb-2">Diskusi Umum</h3>
                        <p class="text-gray-600 text-sm">Berbagi pengalaman dan diskusi umum tentang perundungan</p>
                        <div class="mt-4 text-sm text-gray-500">156 postingan • 43 anggota aktif</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="showForumCategory('support')">
                        <div class="text-primary text-3xl mb-4">🤗</div>
                        <h3 class="text-xl font-semibold mb-2">Dukungan Peer</h3>
                        <p class="text-gray-600 text-sm">Saling mendukung dan berbagi solusi</p>
                        <div class="mt-4 text-sm text-gray-500">89 postingan • 67 anggota aktif</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow cursor-pointer" onclick="showForumCategory('parents')">
                        <div class="text-primary text-3xl mb-4">👨‍👩‍👧‍👦</div>
                        <h3 class="text-xl font-semibold mb-2">Forum Orang Tua</h3>
                        <p class="text-gray-600 text-sm">Khusus untuk orang tua dan wali</p>
                        <div class="mt-4 text-sm text-gray-500">234 postingan • 98 anggota aktif</div>
                    </div>
                </div>

                <!-- Forum Posts -->
                <div id="forum-posts" class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Postingan Terbaru</h3>
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors" onclick="showNewPostForm()">Buat Postingan</button>
                    </div>
                    
                    <!-- Sample Forum Posts -->
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold">A</div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="font-semibold">Anonim</span>
                                        <span class="text-gray-500 text-sm">2 jam yang lalu</span>
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Dukungan</span>
                                    </div>
                                    <h4 class="font-semibold mb-2">Bagaimana cara menghadapi perundungan di media sosial?</h4>
                                    <p class="text-gray-700 text-sm mb-3">Anak saya mengalami cyberbullying di Instagram. Bagaimana cara terbaik untuk menanganinya?</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <button class="hover:text-primary">👍 12 suka</button>
                                        <button class="hover:text-primary">💬 8 balasan</button>
                                        <button class="hover:text-primary">🔗 Bagikan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-b pb-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-semibold">B</div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="font-semibold">Anonim</span>
                                        <span class="text-gray-500 text-sm">5 jam yang lalu</span>
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Berbagi Pengalaman</span>
                                    </div>
                                    <h4 class="font-semibold mb-2">Terima kasih untuk dukungan komunitas ini</h4>
                                    <p class="text-gray-700 text-sm mb-3">Berkat bantuan dari komunitas ini, saya berhasil mengatasi masalah perundungan di sekolah. Terima kasih semuanya!</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <button class="hover:text-primary">👍 25 suka</button>
                                        <button class="hover:text-primary">💬 15 balasan</button>
                                        <button class="hover:text-primary">🔗 Bagikan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Post Form (Hidden by default) -->
                <div id="new-post-form" class="hidden bg-white rounded-xl shadow-lg p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Buat Postingan Baru</h3>
                    <form onsubmit="submitPost(event)">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                            <select class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option>Diskusi Umum</option>
                                <option>Dukungan Peer</option>
                                <option>Forum Orang Tua</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan judul postingan">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Isi Postingan</label>
                            <textarea rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Ceritakan pengalaman atau ajukan pertanyaan Anda..."></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="anonymous" class="rounded">
                                <label for="anonymous" class="text-sm text-gray-700">Posting sebagai anonim</label>
                            </div>
                            <div class="space-x-2">
                                <button type="button" onclick="hideNewPostForm()" class="px-4 py-2 text-gray-600 hover:text-gray-800">Batal</button>
                                <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors">Posting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
@endsection