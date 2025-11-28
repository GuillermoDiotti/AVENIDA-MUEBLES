<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/head.php'; ?>

    <?php include 'components/header.php'; ?>

    <!-- Hero Section con Carrusel -->
    <section class="hero">
        <div class="hero-carousel" id="carousel">
            <div class="carousel-item active">
                <img src="img/living.webp" alt="Sala 1" loading="lazy">
                <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-item">
                <img src="img/cocina2.webp" alt="Sala 2" loading="lazy">
                <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-item">
                <img src="img/comedor.webp" alt="Sala 3" loading="lazy">
                <div class="carousel-overlay"></div>
            </div>
        </div>

        <div class="hero-content">
            <img src="img/logo.webp" alt="Sala 3" style="height: 50%; width: 50%;">
            <div class="btn-group">
                <a href="catalogo.php" class="btn btn-primary">Ver Catálogo</a>
                <a href="contacto.php" class="btn btn-secondary">Contactar</a>
            </div>
        </div>

        <div class="carousel-indicators">
            <button class="carousel-indicator active" data-slide="0"></button>
            <button class="carousel-indicator" data-slide="1"></button>
            <button class="carousel-indicator" data-slide="2"></button>

        </div>
    </section>

    <!-- Beneficios -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">¿Por qué elegir Avenida Muebles?</h2>
            
            <div class="grid grid-auto">
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Calidad Garantizada</h3>
                    <p class="card-text">Materiales premium y acabados impecables</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Mejor Precio</h3>
                    <p class="card-text">Relación calidad-precio inmejorable</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Facilidades de Pago</h3>
                    <p class="card-text">Múltiples opciones de financiación</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Envío a Domicilio</h3>
                    <p class="card-text">Entrega segura en todo Uruguay</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo CTA -->
    <section class="section section-dark" id="catalogo">
        <div class="container">
            <div class="catalog-cta-section">
                
                <div class="catalog-cta-content">
                    <div class="catalog-cta-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="catalog-cta-title">Catálogo Digital 2025</h2>
                    <p class="catalog-cta-description">
                        Descarga nuestro catálogo completo en formato PDF con todas las colecciones, especificaciones técnicas y opciones de personalización.
                    </p>
                    <a href="catalogo.php" class="btn btn-primary">Ir al Catálogo</a>
                </div>
                
                <div class="catalog-cta-image">
                    <img src="img/portada-catalogo.webp" alt="Catálogo" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/carousel.js"></script>
</body>
</html>