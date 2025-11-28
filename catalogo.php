<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Avenida Muebles</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <img src="img/cocina4.webp" alt="Catálogo" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;" loading="lazy">
        <div class="carousel-overlay"></div>
        
        <div class="hero-content">
            <p class="hero-subtitle">Colección 2025</p>
            <h1>Nuestro Catálogo</h1>
            <p class="hero-description">
                Descubre nuestra amplia variedad de muebles diseñados para transformar cada espacio de tu hogar
            </p>
            <div class="btn-group">
                <a href="#catalogo" class="btn btn-primary">Ver Catálogo</a>
            </div>
        </div>
    </section>

    <!-- Sección Catálogo PDF -->
    <section class="section section-dark" id="catalogo">
        <div class="container">
            <div class="download-section">


                <h2 class="download-title">Descargue Nuestro Catálogo Aquí</h2>
                <p class="download-description">
                </p>

                <div class="download-info">
                    <div class="download-stat">
                        <svg class="download-stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="font-bold text-white">PDF</span>
                        <span class="download-stat-label">Formato</span>
                    </div>

                    <div class="download-stat">
                        <svg class="download-stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span class="font-bold text-white">8.5 MB</span>
                        <span class="download-stat-label">Tamaño</span>
                    </div>

                    <div class="download-stat">
                        <svg class="download-stat-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-bold text-white">45 Páginas</span>
                        <span class="download-stat-label">Contenido</span>
                    </div>
                </div>

                <a href="catalog/catalog.pdf" download="Catalogo-Avenida-Muebles-2025.pdf" class="btn-download">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Descargar Catálogo
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-section" style="padding-bottom: 50px;">
        <div class="container-sm text-center">
            <h2 class="cta-title">¿Necesitas asesoramiento personalizado?</h2>
            <p class="cta-text">
                Nuestro equipo está listo para ayudarte a encontrar los muebles perfectos para tu hogar
            </p>
            <div class="btn-group">
                <a href="contacto.php" class="btn btn-primary">Contactar ahora</a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>

</body>
</html>