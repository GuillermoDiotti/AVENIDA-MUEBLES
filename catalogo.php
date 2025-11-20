<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Avenida Muebles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-slate-900">

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-screen overflow-hidden">
        <img src="https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920" alt="Catálogo" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <div class="max-w-3xl">
                    <p class="text-blue-400 font-semibold text-sm tracking-wider uppercase mb-4">Colección 2025</p>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        Nuestro Catálogo
                    </h1>
                    <p class="text-xl text-white/90 leading-relaxed">
                        Descubre nuestra amplia variedad de muebles diseñados para transformar cada espacio de tu hogar
                    </p>
                </div>
                <div class="cta-buttons">
                        <a href="#catalogo" class="btn btn-primary">Ver Catálogo</a>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section class="py-20 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-slate-800 dark:text-white mb-4">Explora por Categoría</h2>
                <p class="text-slate-600 dark:text-slate-300 text-lg">Selecciona el ambiente que deseas amueblar</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer h-96">
                    <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?w=800" alt="Dormitorios" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <h3 class="text-3xl font-bold text-white mb-2">Dormitorios</h3>
                        <p class="text-white/90 mb-4">Confort y estilo para tu descanso</p>
                        <span class="inline-flex items-center text-white font-semibold">
                            Ver productos
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer h-96">
                    <img src="https://images.unsplash.com/photo-1556912173-46c336c7fd55?w=800" alt="Cocinas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <h3 class="text-3xl font-bold text-white mb-2">Cocinas</h3>
                        <p class="text-white/90 mb-4">Funcionalidad y diseño moderno</p>
                        <span class="inline-flex items-center text-white font-semibold">
                            Ver productos
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 cursor-pointer h-96">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800" alt="Salas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <h3 class="text-3xl font-bold text-white mb-2">Salas</h3>
                        <p class="text-white/90 mb-4">Espacios para compartir y disfrutar</p>
                        <span class="inline-flex items-center text-white font-semibold">
                            Ver productos
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-20 bg-gradient-to-br from-slate-800 to-slate-900 dark:from-slate-950 dark:to-black">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                ¿Necesitas asesoramiento personalizado?
            </h2>
            <p class="text-xl text-white/80 mb-8">
                Nuestro equipo está listo para ayudarte a encontrar los muebles perfectos para tu hogar
            </p>
            <a href="index.php#contacto" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Contactar ahora
            </a>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>

</body>
</html>