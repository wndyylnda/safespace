<header class="bg-white/90 backdrop-blur-md shadow-lg fixed w-full top-0 z-50">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <h1 class="text-2xl font-bold text-primary">SafeSpace</h1>
      </div>

      <!-- Hamburger Button (mobile only) -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none">
          <!-- Hamburger Icon -->
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- Menu Items -->
      <div id="menu" class="hidden md:flex flex-col md:flex-row absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none md:space-x-8 md:items-center z-50">
        <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:text-primary font-medium">Beranda</a>
        <a href="{{ route('education') }}" class="block px-4 py-2 text-gray-700 hover:text-primary font-medium">Edukasi</a>
        <a href="{{ route('forum') }}" class="block px-4 py-2 text-gray-700 hover:text-primary font-medium">Forum</a>
        <a href="{{ route('support') }}" class="block px-4 py-2 text-gray-700 hover:text-primary font-medium">Dukungan</a>
      </div>
    </div>
  </nav>
</header>

<!-- Script for toggling the mobile menu -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
  });
</script>
