<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Avenida Muebles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-slate-900">

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-[70vh] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1920" alt="Avenida Muebles" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/40"></div>
        
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <div class="max-w-3xl">
                    <p class="text-blue-400 font-semibold text-sm tracking-wider uppercase mb-4">Más de 30 años de trayectoria</p>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        Diseñando espacios,<br>
                        <span class="text-blue-400">creando hogares</span>
                    </h1>
                    <p class="text-xl text-white/90 leading-relaxed">
                        Transformamos ambientes con muebles de calidad excepcional, 
                        fusionando diseño contemporáneo y funcionalidad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-b from-slate-50 to-white dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-100 dark:bg-blue-900/30 mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 dark:text-white mb-2">+30</h3>
                    <p class="text-slate-600 dark:text-slate-300">Años de experiencia</p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 dark:bg-green-900/30 mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 dark:text-white mb-2">7000m²</h3>
                    <p class="text-slate-600 dark:text-slate-300">Instalaciones propias</p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-purple-100 dark:bg-purple-900/30 mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 dark:text-white mb-2">+50</h3>
                    <p class="text-slate-600 dark:text-slate-300">Equipo profesional</p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-orange-100 dark:bg-orange-900/30 mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 dark:text-white mb-2">Nacional</h3>
                    <p class="text-slate-600 dark:text-slate-300">Cobertura total</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Historia Section -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1">
                    <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-wider uppercase">Nuestra Historia</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-800 dark:text-white mt-4 mb-6">
                        Tres décadas transformando hogares uruguayos
                    </h2>
                    <div class="space-y-4 text-slate-600 dark:text-slate-300 text-lg leading-relaxed">
                        <p>
                            Desde nuestra fundación en <strong class="text-slate-800 dark:text-white">Las Piedras, Canelones</strong>, 
                            nos hemos consolidado como referentes del mercado nacional gracias a nuestro 
                            <strong class="text-slate-800 dark:text-white">compromiso inquebrantable con la calidad y el diseño</strong>.
                        </p>
                        <p>
                            Cada mueble que sale de nuestras instalaciones es el resultado de la perfecta 
                            combinación entre <strong class="text-slate-800 dark:text-white">tecnología de última generación</strong> 
                            importada de las mejores fábricas del mundo y el expertise de nuestro talentoso equipo.
                        </p>
                        <p>
                            Más que fabricar muebles, <strong class="text-slate-800 dark:text-white">creamos soluciones de mobiliario</strong> 
                            que transforman espacios en experiencias, siempre con la mejor relación calidad-precio del mercado.
                        </p>
                    </div>
                </div>

                <div class="order-1 md:order-2 relative">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=800" alt="Instalaciones" class="rounded-2xl shadow-2xl">
                        <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white p-6 rounded-xl shadow-xl">
                            <p class="text-3xl font-bold">30+</p>
                            <p class="text-sm">Años de excelencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores Section -->
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-wider uppercase">Nuestros Pilares</span>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-800 dark:text-white mt-4">
                    Lo que nos define
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Valor 1 -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 dark:text-white mb-4">Calidad Superior</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Importamos productos de fábricas con tecnología de última generación, 
                        garantizando durabilidad y acabados impecables en cada pieza.
                    </p>
                </div>

                <!-- Valor 2 -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 dark:text-white mb-4">Diseño Innovador</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Combinamos tendencias internacionales con funcionalidad práctica, 
                        creando muebles que elevan cualquier ambiente con estilo contemporáneo.
                    </p>
                </div>

                <!-- Valor 3 -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 dark:text-white mb-4">Respeto al Cliente</h3>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Nuestra prioridad es tu satisfacción. Construimos relaciones duraderas 
                        basadas en confianza, transparencia y servicio excepcional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Instalaciones Section -->
    <section class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-wider uppercase">Infraestructura</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-800 dark:text-white mt-4 mb-6">
                        7000m² de innovación y producción
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 text-lg leading-relaxed mb-8">
                        Nuestras modernas instalaciones en <strong class="text-slate-800 dark:text-white">Las Piedras</strong> 
                        integran tecnología de punta con espacios optimizados para cada etapa del proceso productivo.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-white mb-1">Maquinaria de última generación</h4>
                                <p class="text-slate-600 dark:text-slate-300">Equipos importados que garantizan precisión y calidad en cada detalle</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-white mb-1">Equipo profesional capacitado</h4>
                                <p class="text-slate-600 dark:text-slate-300">Más de 50 colaboradores especializados en cada área</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-white mb-1">Control de calidad riguroso</h4>
                                <p class="text-slate-600 dark:text-slate-300">Cada pieza pasa por múltiples inspecciones antes de salir</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400" alt="Instalación 1" class="rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=400" alt="Instalación 2" class="rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 mt-8">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400" alt="Instalación 3" class="rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=400" alt="Instalación 4" class="rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-white dark:bg-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                ¿Listo para transformar tu espacio?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Descubre nuestra amplia selección de muebles diseñados para hacer de tu hogar 
                un lugar único y acogedor.
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="index.php#catalogo" class="bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200">
                    Ver Catálogo
                </a>
                <a href="index.php#contacto" class="bg-blue-800 text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200">
                    Contactar
                </a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>

</body>
</html>