<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Avenida Muebles</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>        
        /* Hero con efecto parallax */
        .hero-nosotros {
            position: relative;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 0;
        }
        
        .hero-nosotros img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.1);
        }
        
        .carousel-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(26,26,26,0.5) 100%);
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem;
            max-width: 900px;
        }
        
        .hero-subtitle {
            color: var(--accent-gold);
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            margin-bottom: 1rem;
        }
        
        .hero-content h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }
        
        .hero-description {
            font-size: 1.25rem;
            line-height: 1.6;
            color: rgba(255,255,255,0.9);
        }
        
        /* Stats Section - Diseño Asimétrico */
        .section-stats {
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--background-dark) 100%);
            padding: 6rem 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .section-stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(201,167,110,0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            position: relative;
        }
        
        .stat-card {
            background: var(--secondary-black);
            border: 2px solid var(--border-color);
            border-radius: 1.5rem;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--accent-gold), #d4b080);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .stat-card:hover::before {
            opacity: 0.1;
        }
        
        .stat-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: var(--accent-gold);
            box-shadow: 0 20px 60px rgba(201,167,110,0.3);
        }
        
        .stat-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.4s ease;
            position: relative;
        }
        
        .stat-card:hover .stat-icon {
            transform: rotate(360deg) scale(1.1);
        }
        
        .stat-icon-blue {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
        }
        
        .stat-icon-green {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        
        .stat-icon-purple {
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
        }
        
        .stat-icon-orange {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }
        
        .stat-icon svg {
            width: 50px;
            height: 50px;
            color: white;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--accent-gold);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 1.1rem;
            color: var(--text-secondary);
        }

        .two-col-section-horizontal {
            display: grid;
            grid-template-columns: 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
        }
        
        /* Two Column Section */
        .two-col-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
        }
        
        .section-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent-gold), #d4b080);
            color: var(--primary-black);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 1.5rem;
        }
        
        .section-title-left {
            font-size: 2.5rem;
            line-height: 1.2;
            margin-bottom: 2rem;
            font-weight: 800;
        }
        
        .text-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: var(--text-secondary);
            text-align: justify;

        }
        
        .text-content strong {
            color: var(--accent-gold);
            font-weight: 600;
        }
        
        .image-wrapper {
            position: relative;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            transform: rotate(-2deg);
            transition: transform 0.4s ease;
        }
        
        .image-wrapper:hover {
            transform: rotate(0deg) scale(1.02);
        }
        
        .image-wrapper img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }
        
        .image-badge {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            background: rgba(26,26,26,0.95);
            backdrop-filter: blur(10px);
            padding: 1.5rem 2rem;
            border-radius: 1rem;
            border: 2px solid var(--accent-gold);
        }
        
        .badge-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--accent-gold);
            line-height: 1;
            margin-bottom: 0.25rem;
        }
        
        .badge-text {
            font-size: 0.95rem;
            color: white;
            margin: 0;
        }
        
        /* Feature List */
        .feature-list {
            margin-top: 2rem;
        }
        
        .feature-item {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--secondary-black);
            border-radius: 1rem;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            border-color: var(--accent-gold);
            transform: translateX(10px);
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent-gold), #d4b080);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .feature-icon svg {
            width: 24px;
            height: 24px;
            color: white;
        }
        
        .feature-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: white;
        }
        
        .feature-item p {
            color: var(--text-secondary);
            margin: 0;
            font-size: 0.95rem;
        }
        
        /* CTA Section - Diseño Impactante */
        .cta-section {
            background: linear-gradient(135deg, var(--accent-gold) 0%, #d4b080 100%);
            padding: 6rem 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        @keyframes movePattern {
            0% { transform: translate(0, 0); }
            100% { transform: translate(30px, 30px); }
        }
        
        .cta-title {
            font-size: 3rem;
            color: var(--primary-black);
            margin-bottom: 1rem;
            font-weight: 800;
            position: relative;
        }
        
        .cta-text {
            font-size: 1.25rem;
            color: rgba(26,26,26,0.8);
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }
        
        /* Section Header Centered */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .text-lead {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .two-col-section {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .two-col-section-horizontal {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-description {
                font-size: 1.1rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
            
            .stat-card {
                padding: 2rem 1.5rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .section-title-left {
                font-size: 2rem;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 1.75rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .feature-item {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <?php include 'components/header.php'; ?>

    <section class="hero hero-nosotros">
        <div class="hero-carousel" id="carousel">
            <div class="carousel-item active">
                <img src="img/oficinas.jpeg" alt="Img">
                <div class="carousel-overlay"></div>
            </div>
        </div>

        <div class="hero-content">
            <p class="hero-subtitle">Más de 30 años de trayectoria</p>
            <h1>
                Líderes en
                <span class="text-gold"> distribución mayorista</span>
            </h1>
            <p class="hero-description">
                Representantes exclusivos de las mejores fábricas de China y Brasil, ofreciendo mobiliario de calidad superior con cobertura nacional en todo el país.
            </p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section section-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon stat-icon-blue">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number">+30</h3>
                    <p class="stat-label">Años de experiencia en el mercado Uruguayo</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-green">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number">7000m²</h3>
                    <p class="stat-label">En instalaciones propias</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-purple">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number">+50</h3>
                    <p class="stat-label">Equipo profesional capacitado</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon stat-icon-orange">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="stat-number">Nacional</h3>
                    <p class="stat-label">Cobertura total a todo el Uruguay</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Historia Section -->
    <section class="section">
        <div class="container">
            <div class="two-col-section">
                <div class="content-col">
                    <span class="section-badge">Nuestra Historia</span>
                    <h2 class="section-title-left">
                        Tres décadas liderando el mercado mayorista de muebles en Uruguay
                    </h2>
                    <div class="text-content">
                        <p>
                            <strong>Tres décadas</strong> impulsando la <strong>distribución mayorista de muebles
                            </strong> en Uruguay. Desde nuestra fundación en <strong>Las Piedras, Canelones</strong>, 
                            nos hemos consolidado como un <strong>referente nacional</strong> en el sector, con <strong>cobertura en todo el país</strong> 
                            y una trayectoria sostenida en el mercado mayorista.
                        </p>
                        <p>
                            Somos <strong>representantes exclusivos en Uruguay</strong> de reconocidas fábricas de <strong>China</strong> y <strong>Brasil</strong>, 
                            lo que nos permite ofrecer acceso directo a <strong>líneas de producción de primer nivel</strong> y colecciones alineadas con las demandas del mercado.
                        </p>
                        <p>
                            Nuestra participación constante en <strong>ferias internacionales</strong> nos permite seleccionar y <strong>renovar permanentemente nuestro catálogo,
                            </strong>manteniéndonos al día con las <strong>tendencias globales</strong> en diseño y funcionalidad para ofrecer propuestas contemporáneas y competitivas.
                        </p>
                        <p>
                            Comprometidos con la <strong>innovación</strong> y la <strong>calidad internacional</strong>, trabajamos para ofrecer una oferta diversa y en constante evolución 
                            que respalde nuestro <strong>liderazgo en el mercado mayorista</strong>.
                        </p>
                    </div>
                </div>

                <div class="image-col">
                    <div class="image-wrapper">
                        <img src="img/showroom.jpeg" alt="Instalaciones">
                        <div class="image-badge">
                            <p class="badge-number">30+</p>
                            <p class="badge-text">Años de excelencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="two-col-section-horizontal">
                <div class="content-col">
                    <span class="section-badge">Expansión e Innovación</span>
                    <h2 class="section-title-left">
                        Nuevo centro logístico en construcción
                    </h2>
                    <div class="text-content">
                        <p>
                            <strong>Nuevo centro logístico en construcción</strong>. Actualmente estamos desarrollando nuestra nueva planta en <strong>Ruta 48, Las Piedras</strong>, un proyecto que ampliará de forma significativa nuestra capacidad operativa y optimizará nuestros <strong>tiempos de entrega</strong> en todo el país.
                        </p>
                        <p>
                            Esta inversión reafirma nuestro compromiso con el <strong>crecimiento sostenido</strong> y la <strong>modernización</strong> de nuestra infraestructura, siempre con el objetivo de ofrecer un <strong>servicio superior</strong> a nuestros clientes mayoristas.
                        </p>
                        <p>
                            La incorporación de este nuevo centro logístico nos permitirá operar con mayor eficiencia, mejorar la gestión de inventarios y responder con mayor agilidad a las demandas del mercado uruguayo.
                        </p>
                    </div>
                </div>

                <div class="image-col">
                    <div class="image-wrapper">
                        <img src="img/proyecto.jpeg" alt="Instalaciones">
                        <div class="image-badge">
                            <p class="badge-number">30+</p>
                            <p class="badge-text">Años de excelencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores Section -->
    <section class="section section-darker">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Nuestros Pilares</span>
                <h2 class="section-title">Lo que nos define</h2>
            </div>

            <div class="grid grid-3">
                <div class="card">
                    <div class="card-icon card-icon-blue">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Calidad Superior</h3>
                    <p class="card-text">
                        Importamos productos de fábricas con tecnología de última generación, 
                        garantizando durabilidad y acabados impecables en cada pieza.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon card-icon-green">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Diseño Innovador</h3>
                    <p class="card-text">
                        Combinamos tendencias internacionales con funcionalidad práctica, 
                        creando muebles que elevan cualquier ambiente con estilo contemporáneo.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon card-icon-purple">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Respeto al Cliente</h3>
                    <p class="card-text">
                        Nuestra prioridad es tu satisfacción. Construimos relaciones duraderas 
                        basadas en confianza, transparencia y servicio excepcional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Instalaciones Section -->
    <section class="section">
        <div class="container">
            <div class="two-col-section">
                <div class="image-col">
                    <div class="image-wrapper">
                        <img src="img/proyecto.jpeg" alt="Instalaciones">
                        <div class="image-badge">
                            <p class="badge-number">30+</p>
                            <p class="badge-text">Años de excelencia</p>
                        </div>
                    </div>
                </div>

                <div class="content-col">
                    <span class="section-badge">Infraestructura</span>
                    <h2 class="section-title-left">
                        7000m² de innovación y producción
                    </h2>
                    <p class="text-lead">
                        Nuestras modernas instalaciones en <strong>Las Piedras</strong> 
                        integran tecnología de punta con espacios optimizados para cada etapa del proceso productivo.
                    </p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4>Maquinaria de última generación</h4>
                                <p>Equipos importados que garantizan precisión y calidad en cada detalle</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4>Equipo profesional capacitado</h4>
                                <p>Más de 50 colaboradores especializados en cada área</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4>Control de calidad riguroso</h4>
                                <p>Cada pieza pasa por múltiples inspecciones antes de salir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container-sm text-center">
            <h2 class="cta-title">¿Listo para transformar tu espacio?</h2>
            <p class="cta-text">
                Descubre nuestra amplia selección de muebles diseñados para hacer de tu hogar 
                un lugar único y acogedor.
            </p>
            <div class="btn-group">
                <a href="/catalogo.php" class="btn btn-primary">Ver Catálogo</a>
                <a href="/contacto.php" class="btn btn-secondary">Contactar</a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>

</body>
</html>