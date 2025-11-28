<?php
$allNews = array(
    array(
        'id' => 1, 
        'title' => 'Nueva Línea de Oficina Corporativa', 
        'excerpt' => 'Presentamos nuestra colección premium de mobiliario de oficina, diseñada para espacios corporativos modernos que buscan elegancia y funcionalidad.', 
        'date' => '15 Nov 2024', 
        'category' => 'oficina', 
        'badge' => 'NUEVO',
        'image' => 'img/corporativos.webp', 
        'content' => 'La nueva línea ejecutiva combina diseño contemporáneo con ergonomía de última generación.'
    ),
    array(
        'id' => 2, 
        'title' => 'Sillones de Cuero Premium', 
        'excerpt' => 'Exclusiva colección de sillones en cuero genuino italiano, perfectos para crear ambientes sofisticados.', 
        'date' => '10 Nov 2024', 
        'category' => 'living', 
        'badge' => 'PREMIUM',
        'image' => 'img/sofa.webp', 
        'content' => 'Cuero premium curtido al vegetal con garantía de 10 años.'
    ),
    array(
        'id' => 3, 
        'title' => 'Cocinas Modulares Inteligentes', 
        'excerpt' => 'Línea de mobiliario minimalista que redefine los espacios de descanto con diseños limpios.', 
        'date' => '5 Nov 2024', 
        'category' => 'cocina', 
        'badge' => 'MINIMALISTA',
        'image' => 'img/cocina3.webp', 
        'content' => 'Inspirada en el diseño escandinavo, esta colección presenta líneas simples.'
    ),
    array(
        'id' => 4, 
        'title' => 'Cocinas Modulares Inteligentes', 
        'excerpt' => 'Revolucionaria línea de cocinas con tecnología integrada y diseño modular adaptable.', 
        'date' => '1 Nov 2024', 
        'category' => 'dormitorio', 
        'badge' => 'COMODIDAD',
        'image' => 'img/wish.webp',
        'content' => 'Módulos intercambiables con iluminación LED inteligente.'
    ),
    array(
        'id' => 5, 
        'title' => 'Home Office Compacto', 
        'excerpt' => 'Soluciones inteligentes para crear tu espacio de trabajo ideal en espacios reducidos.', 
        'date' => '28 Oct 2024', 
        'category' => 'living', 
        'badge' => 'RUSTICO',
        'image' => 'img/linea-rustico.webp', 
        'content' => 'Escritorios plegables, estanterías verticales y sillas ergonómicas.'
    )
);

$category = isset($_GET['category']) ? $_GET['category'] : 'all';
$filtered = array_filter($allNews, function($news) use ($category) {
    return $category === 'all' || $news['category'] === $category;
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-novedades">
        <h1>Novedades y <span>Lanzamientos</span></h1>
        <p>Descubre las últimas tendencias en mobiliario</p>
    </section>

    <!-- Main Content -->
    <section class="section section-dark">
        <div class="container">
            
            <!-- Filter Bar -->
            <div class="filter-bar">
                <a href="novedades.php?category=all" class="filter-btn <?php echo $category === 'all' ? 'active' : ''; ?>">Todas</a>
                <a href="novedades.php?category=oficina" class="filter-btn <?php echo $category === 'oficina' ? 'active' : ''; ?>">Oficina</a>
                <a href="novedades.php?category=living" class="filter-btn <?php echo $category === 'living' ? 'active' : ''; ?>">Living</a>
                <a href="novedades.php?category=dormitorio" class="filter-btn <?php echo $category === 'dormitorio' ? 'active' : ''; ?>">Dormitorio</a>
                <a href="novedades.php?category=cocina" class="filter-btn <?php echo $category === 'cocina' ? 'active' : ''; ?>">Cocina</a>
            </div>

            <!-- News Grid -->
            <div class="news-grid">
                <?php foreach ($filtered as $news): ?>
                    <div class="news-card" onclick="openModal(<?php echo htmlspecialchars(json_encode($news)); ?>)">
                        <div class="news-image" style="background-image: url('<?php echo $news['image']; ?>'); background-size: cover; background-position: center;">                            <span class="news-badge"><?php echo $news['badge']; ?></span>
                            <span class="news-badge"><?php echo $news['badge']; ?></span>
                        </div>
                        <div class="news-content">
                            <div class="news-date"><?php echo $news['date']; ?></div>
                            <h3 class="news-title"><?php echo $news['title']; ?></h3>
                            <p class="news-excerpt"><?php echo $news['excerpt']; ?></p>
                            <div class="news-footer">
                                <span class="news-category"><?php echo ucfirst($news['category']); ?></span>
                                <a href="#" class="read-more" onclick="event.preventDefault();">
                                    Leer más
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (empty($filtered)): ?>
                <div class="empty-state">
                    <div class="empty-state-icon">📦</div>
                    <p>No hay novedades en esta categoría</p>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- Modal -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>
            <div id="modalBody"></div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="js/carousel.js"></script>
    <script>
        function openModal(news) {
            const modal = document.getElementById('modal');
            const modalBody = document.getElementById('modalBody');
            
            modalBody.innerHTML = `
                <div class="news-date">${news.date}</div>
                <h2 style="font-size: 2.5rem; margin: 1rem 0 2rem; color: #ffffff; font-weight: 800; line-height: 1.2;">${news.title}</h2>
                <div style="margin-bottom: 2.5rem; height: 400px; border-radius: 1.5rem; box-shadow: 0 15px 40px rgba(0,0,0,0.3); background-image: url('${news.image}'); background-size: cover; background-position: center;"></div>
                <p style="line-height: 1.9; font-size: 1.15rem; color: #e0e0e0; margin-bottom: 2.5rem;">${news.content}</p>
                <div style="margin-top: 2.5rem; padding-top: 2rem; border-top: 2px solid #404040; display: flex; justify-content: space-between; align-items: center;">
                    <span class="news-category">${news.category.charAt(0).toUpperCase() + news.category.slice(1)}</span>
                    <span class="news-badge">${news.badge}</span>
                </div>
            `;
            
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target == modal) {
                closeModal();
            }
        }
        
        // Cerrar modal con tecla ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>

</body>
</html>