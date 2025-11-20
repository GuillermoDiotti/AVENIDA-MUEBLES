<header class="absolute top-0 left-0 right-0 z-50 bg-gradient-to-b from-black/60 to-transparent backdrop-blur-sm transition-all duration-300" id="header">
    <nav class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            
            <!-- Logo -->
            <div class="flex items-center">
                <a href="index.php" class="flex items-center gap-3 group">
                    <img src="img/logo-header.jpg" alt="Avenida Muebles Logo" class="h-20 w-20 object-contain transition-transform duration-300 group-hover:scale-105">
                    <span class="text-2xl font-bold text-white tracking-tight">
                        Avenida Muebles
                    </span>
                </a>
            </div>

            <!-- Navigation Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                    Home
                </a>
                <a href="nosotros.php" class="text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                    Nosotros
                </a>
                <a href="catalogo.php" class="text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                    Catálogo
                </a>
                <a href="novedades.php" class="block text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                    Novedades
                </a>
                <a href="contacto.php" class="text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                    Contacto
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 space-y-3 border-t border-white/20 pt-4">
            <a href="index.php" class="block text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                Home
            </a>
            <a href="nosotros.php" class="text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                Nosotros
            </a>
            <a href="catalogo.php" class="block text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                Catálogo
            </a>
            <a href="contacto.php" class="block text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                Contacto
            </a>
            <a href="novedades.php" class="block text-white/90 hover:text-white transition font-medium text-sm tracking-wide uppercase">
                Novedades
            </a>
        </div>
    </nav>
</header>

<style>
/* Header scrolled state */
.header-scrolled {
    position: fixed !important;
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.header-scrolled .logo-img {
    filter: brightness(1) invert(0) !important;
}

.header-scrolled a,
.header-scrolled button svg {
    color: #1e293b !important;
}

.header-scrolled .text-white {
    color: #1e293b !important;
}

.header-scrolled .text-white\/90 {
    color: #475569 !important;
}

.header-scrolled .border-white\/20 {
    border-color: #e2e8f0 !important;
}

.header-scrolled .hover\:bg-white\/10:hover {
    background-color: rgba(0, 0, 0, 0.05) !important;
}
</style>