<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenida Muebles - Catálogo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .catalogo-section .grid.md\:grid-cols-2 {
            min-height: 600px;
        }

        .catalogo-section .relative.h-full {
            min-height: 600px;
        }

        @media (max-width: 768px) {
            .catalogo-section .grid.md\:grid-cols-2 {
                min-height: auto;
            }
        }
    </style>
</head>
<body class="bg-white dark:bg-slate-900 transition-colors duration-300">

    <?php include 'components/header.php'; ?>

    <!-- Hero Section con Carrusel -->
    <section class="relative h-screen overflow-hidden">
        
        <!-- Carrusel de imágenes -->
        <div id="carousel" class="absolute inset-0">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=1920" alt="Sala 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=1920" alt="Sala 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1567016432779-094069958ea5?w=1920" alt="Sala 3" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            <div class="carousel-item">
                <img src="img/pic.png" alt="Sala 4" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
        </div>

        <!-- Contenido sobre el carrusel -->
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center text-white px-4">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 drop-shadow-lg">Avenida Muebles</h1>
                <p class="text-xl md:text-2xl mb-8 drop-shadow-md">Calidad y diseño para tu hogar</p>
                <div class="flex gap-4 justify-center">
                    <a href="#catalogo" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-200">
                        Ver Catálogo
                    </a>
                    <a href="#contacto" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-3 px-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-200">
                        Contactar
                    </a>
                </div>
            </div>
        </div>

        <!-- Indicadores del carrusel -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex gap-3">
            <button class="carousel-indicator active" data-slide="0"></button>
            <button class="carousel-indicator" data-slide="1"></button>
            <button class="carousel-indicator" data-slide="2"></button>
        </div>
    </section>

        <!-- Beneficios -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-slate-800 dark:text-white mb-4">¿Por qué elegir Avenida Muebles?</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-2">Calidad Garantizada</h3>
                    <p class="text-slate-600 dark:text-slate-300">Materiales premium y acabados impecables</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-2">Mejor Precio</h3>
                    <p class="text-slate-600 dark:text-slate-300">Relación calidad-precio inmejorable</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900/30 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-2">Facilidades de Pago</h3>
                    <p class="text-slate-600 dark:text-slate-300">Múltiples opciones de financiación</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-orange-100 dark:bg-orange-900/30 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-2">Envío a Domicilio</h3>
                    <p class="text-slate-600 dark:text-slate-300">Entrega segura en todo Uruguay</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo -->
    <section class="py-20 bg-white dark:bg-slate-900 catalogo-section">
    <div class="max-w-9xl mx-auto px-4">
        <div class="bg-gradient-to-r from-gray-600 to-dark-gray-700 rounded-3xl overflow-hidden shadow-2xl">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="p-20">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-white mb-4">Catálogo Digital 2025</h2>
                        <p class="text-white/90 text-lg mb-8 leading-relaxed">
                            Descarga nuestro catálogo completo en formato PDF con todas las colecciones, especificaciones técnicas y opciones de personalización.
                        </p>
                        <a href="catalogo.php" class="inline-flex items-center bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200">
                            Ir al Catálogo
                        </a>
                    </div>
                    <div class="hidden md:block relative h-full min-h-[400px]">
                        <img src="img/portada-catalogo.jpg" alt="Catálogo" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>