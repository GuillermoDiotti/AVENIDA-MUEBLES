<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades - Avenida Muebles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #c9a76e;
            --text: #333;
            --light: #f8f9fa;
            --white: #ffffff;
            --shadow: rgba(0, 0, 0, 0.1);
            --gradient: linear-gradient(135deg, var(--secondary) 0%, #d4b080 100%);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--light);
            color: var(--text);
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            background: var(--gradient);
            color: var(--white);
            padding: 4rem 5%;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 300;
            animation: fadeInDown 0.8s ease;
        }

        .hero p {
            font-size: 1.2rem;
            opacity: 0.95;
            animation: fadeInUp 0.8s ease 0.2s backwards;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 5%;
        }

        .filter-bar {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid var(--secondary);
            background: var(--white);
            color: var(--text);
            border-radius: 50px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--secondary);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* News Grid */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .news-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
            cursor: pointer;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .news-image {
            width: 100%;
            height: 250px;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .news-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.3) 100%);
        }

        .news-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--white);
            color: var(--primary);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 1;
        }

        .news-content {
            padding: 2rem;
        }

        .news-date {
            color: var(--secondary);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .news-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
            font-weight: 600;
            line-height: 1.3;
        }

        .news-excerpt {
            color: #666;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .news-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .read-more {
            color: var(--secondary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .read-more:hover {
            gap: 1rem;
        }

        .news-category {
            background: var(--light);
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--text);
        }

        /* Loading Spinner */
        .loading {
            text-align: center;
            padding: 3rem;
            display: none;
        }

        .loading.show {
            display: block;
        }

        .spinner {
            border: 4px solid var(--light);
            border-top: 4px solid var(--secondary);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        .loading-text {
            margin-top: 1rem;
            color: #666;
            font-weight: 500;
        }

        /* No More Content */
        .no-more {
            text-align: center;
            padding: 3rem;
            color: #999;
            font-style: italic;
            display: none;
        }

        .no-more.show {
            display: block;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .news-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .filter-bar {
                justify-content: flex-start;
            }
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        .modal.show {
            display: block;
        }

        .modal-content {
            background: var(--white);
            margin: 3rem auto;
            padding: 3rem;
            width: 90%;
            max-width: 800px;
            border-radius: 15px;
            position: relative;
            animation: slideIn 0.3s ease;
        }

        .modal-close {
            position: absolute;
            right: 2rem;
            top: 2rem;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
            transition: color 0.3s ease;
        }

        .modal-close:hover {
            color: var(--primary);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        header {
            position: relative !important;
            background: var(--primary) !important;
            backdrop-filter: none !important;
        }

        header nav {
            background: transparent !important;
        }

        /* Asegurar que el hero comience correctamente después del header */
        body {
            padding-top: 0;
        }

        .hero {
            margin-top: 0;
        }

        /* Prevenir conflictos de z-index */
        header {
            z-index: 100;
        }

        .modal {
            z-index: 2000;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <!-- Hero -->
    <section class="hero">
        <h1>Novedades y Lanzamientos</h1>
        <p>Descubre las últimas tendencias en mobiliario</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <button class="filter-btn active" data-category="all">Todas</button>
            <button class="filter-btn" data-category="oficina">Oficina</button>
            <button class="filter-btn" data-category="living">Living</button>
            <button class="filter-btn" data-category="dormitorio">Dormitorio</button>
            <button class="filter-btn" data-category="cocina">Cocina</button>
        </div>

        <!-- News Grid -->
        <div class="news-grid" id="newsGrid">
            <!-- Content loaded via JavaScript -->
        </div>

        <!-- Loading Spinner -->
        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p class="loading-text">Cargando más novedades...</p>
        </div>

        <!-- No More Content -->
        <div class="no-more" id="noMore">
            <p>✓ Has visto todas las novedades</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <div id="modalBody"></div>
        </div>
    </div>

    <script>
        // Base de datos de novedades (en producción esto vendría de PHP/MySQL)
        const allNews = [
            {
                id: 1,
                title: "Nueva Línea de Oficina Ejecutiva",
                excerpt: "Presentamos nuestra colección premium de mobiliario de oficina, diseñada para espacios corporativos modernos que buscan elegancia y funcionalidad.",
                date: "15 Nov 2024",
                category: "oficina",
                icon: "🏢",
                badge: "NUEVO",
                content: "La nueva línea ejecutiva combina diseño contemporáneo con ergonomía de última generación. Escritorios con sistemas de gestión de cables integrados, sillas con soporte lumbar certificado y módulos de almacenamiento inteligente. Acabados en nogal europeo y detalles en acero inoxidable."
            },
            {
                id: 2,
                title: "Sillones de Cuero Premium",
                excerpt: "Exclusiva colección de sillones en cuero genuino italiano, perfectos para crear ambientes sofisticados y confortables en tu hogar.",
                date: "10 Nov 2024",
                category: "living",
                icon: "🛋️",
                badge: "EXCLUSIVO",
                content: "Cuero premium curtido al vegetal con garantía de 10 años. Estructura reforzada de madera maciza y espumas de alta densidad. Disponibles en cognac, negro profundo y gris tormenta. Cada pieza es única y numerada."
            },
            {
                id: 3,
                title: "Colección Minimalista para Dormitorios",
                excerpt: "Línea de mobiliario minimalista que redefine los espacios de descanso con diseños limpios y funcionales.",
                date: "5 Nov 2024",
                category: "dormitorio",
                icon: "🛏️",
                badge: "TENDENCIA",
                content: "Inspirada en el diseño escandinavo, esta colección presenta líneas simples y acabados mate. Closets con sistemas de organización modular, mesas de noche con carga inalámbrica integrada y camas con bases de almacenamiento oculto."
            },
            {
                id: 4,
                title: "Cocinas Modulares Inteligentes",
                excerpt: "Revolucionaria línea de cocinas con tecnología integrada y diseño modular adaptable a cualquier espacio.",
                date: "1 Nov 2024",
                category: "cocina",
                icon: "🍳",
                badge: "INNOVACIÓN",
                content: "Módulos intercambiables con iluminación LED inteligente, superficies antibacteriales y sistemas de apertura sin tiradores. Incluye opciones de integración con electrodomésticos inteligentes y diseño sustentable."
            },
            {
                id: 5,
                title: "Home Office Compacto",
                excerpt: "Soluciones inteligentes para crear tu espacio de trabajo ideal en espacios reducidos.",
                date: "28 Oct 2024",
                category: "oficina",
                icon: "💼",
                badge: "PRÁCTICO",
                content: "Escritorios plegables, estanterías verticales y sillas ergonómicas diseñadas específicamente para espacios pequeños. Optimiza cada centímetro sin sacrificar estilo ni funcionalidad."
            },
            {
                id: 6,
                title: "Sillones Reclinables de Última Generación",
                excerpt: "Tecnología y confort se unen en esta nueva línea de sillones reclinables con múltiples posiciones.",
                date: "22 Oct 2024",
                category: "living",
                icon: "🪑",
                badge: "CONFORT",
                content: "Sistema de reclinación silencioso con memoria de posiciones favoritas. Tapizados en microfibra de alta resistencia o cuero ecológico. Incluye puertos USB y control remoto."
            },
            {
                id: 7,
                title: "Dormitorios Juveniles Modernos",
                excerpt: "Colección vibrante y funcional diseñada especialmente para espacios de adolescentes y jóvenes.",
                date: "18 Oct 2024",
                category: "dormitorio",
                icon: "🎨",
                badge: "JUVENIL",
                content: "Camas con almacenamiento integrado, escritorios con estantes modulares y armarios con espejos de cuerpo completo. Colores personalizables y diseños que crecen con tus hijos."
            },
            {
                id: 8,
                title: "Isla Central para Cocinas",
                excerpt: "La pieza que transformará tu cocina en el corazón social de tu hogar.",
                date: "12 Oct 2024",
                category: "cocina",
                icon: "🏝️",
                badge: "DESTACADO",
                content: "Islas multifuncionales con tope de granito o cuarzo, espacio para electrodomésticos empotrados y área para comedor informal. Cajones de cierre suave y sistemas de organización interna."
            },
            {
                id: 9,
                title: "Sillas de Oficina Ergonómicas",
                excerpt: "Diseño ergonómico certificado para jornadas laborales prolongadas sin comprometer la salud.",
                date: "8 Oct 2024",
                category: "oficina",
                icon: "🪑",
                badge: "SALUD",
                content: "Respaldo con soporte lumbar ajustable, reposabrazos 4D y base giratoria con ruedas silenciosas. Certificación ergonómica internacional. Tapizado en malla transpirable o cuero sintético premium."
            },
            {
                id: 10,
                title: "Sofás Modulares Configurables",
                excerpt: "Crea el sofá perfecto para tu espacio con nuestros módulos intercambiables.",
                date: "3 Oct 2024",
                category: "living",
                icon: "🛋️",
                badge: "VERSÁTIL",
                content: "Sistema modular que permite crear infinitas configuraciones. Módulos individuales, esquineros, chaise longue y otomanas que se conectan fácilmente. Fundas removibles y lavables."
            },
            {
                id: 11,
                title: "Vestidores a Medida Premium",
                excerpt: "Soluciones personalizadas de almacenamiento que maximizan cada espacio.",
                date: "28 Sep 2024",
                category: "dormitorio",
                icon: "👔",
                badge: "PREMIUM",
                content: "Diseño 100% personalizable con sistemas de iluminación LED integrada. Cajones con separadores ajustables, zapateros giratorios y áreas especiales para accesorios. Acabados en madera o lacados brillantes."
            },
            {
                id: 12,
                title: "Alacenas Organizadoras",
                excerpt: "Soluciones inteligentes de almacenamiento para mantener tu cocina impecable.",
                date: "22 Sep 2024",
                category: "cocina",
                icon: "🗄️",
                badge: "ORGANIZA",
                content: "Sistemas extraíbles para especieros, cestas pull-out para despensa y organizadores de esquina optimizados. Rieles de alta calidad con cierre suave y capacidades de carga superiores."
            }
        ];

        let currentPage = 0;
        const itemsPerPage = 6;
        let currentCategory = 'all';
        let isLoading = false;

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            loadNews();
            setupInfiniteScroll();
            setupFilters();
        });

        // Cargar novedades
        function loadNews() {
            if (isLoading) return;
            
            isLoading = true;
            const loading = document.getElementById('loading');
            loading.classList.add('show');

            // Simular delay de carga (en producción esto sería una llamada AJAX)
            setTimeout(() => {
                const filteredNews = currentCategory === 'all' 
                    ? allNews 
                    : allNews.filter(n => n.category === currentCategory);

                const start = currentPage * itemsPerPage;
                const end = start + itemsPerPage;
                const newsToShow = filteredNews.slice(start, end);

                if (newsToShow.length === 0) {
                    document.getElementById('noMore').classList.add('show');
                    loading.classList.remove('show');
                    isLoading = false;
                    return;
                }

                const newsGrid = document.getElementById('newsGrid');
                
                newsToShow.forEach((news, index) => {
                    const card = createNewsCard(news);
                    card.style.animationDelay = `${index * 0.1}s`;
                    newsGrid.appendChild(card);
                });

                currentPage++;
                loading.classList.remove('show');
                isLoading = false;

                // Verificar si hay más contenido
                if (end >= filteredNews.length) {
                    document.getElementById('noMore').classList.add('show');
                }
            }, 800);
        }

        // Crear tarjeta de novedad
        function createNewsCard(news) {
            const card = document.createElement('div');
            card.className = 'news-card';
            card.onclick = () => openModal(news);
            
            card.innerHTML = `
                <div class="news-image">
                    <span class="news-badge">${news.badge}</span>
                    ${news.icon}
                </div>
                <div class="news-content">
                    <div class="news-date">${news.date}</div>
                    <h3 class="news-title">${news.title}</h3>
                    <p class="news-excerpt">${news.excerpt}</p>
                    <div class="news-footer">
                        <span class="news-category">${getCategoryName(news.category)}</span>
                        <a href="#" class="read-more" onclick="event.preventDefault();">
                            Leer más →
                        </a>
                    </div>
                </div>
            `;
            
            return card;
        }

        // Infinite Scroll
        function setupInfiniteScroll() {
            window.addEventListener('scroll', () => {
                const { scrollTop, scrollHeight, clientHeight } = document.documentElement;
                
                if (scrollTop + clientHeight >= scrollHeight - 500 && !isLoading) {
                    const noMore = document.getElementById('noMore');
                    if (!noMore.classList.contains('show')) {
                        loadNews();
                    }
                }
            });
        }

        // Filtros
        function setupFilters() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Actualizar botones activos
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Resetear y filtrar
                    currentCategory = this.dataset.category;
                    currentPage = 0;
                    document.getElementById('newsGrid').innerHTML = '';
                    document.getElementById('noMore').classList.remove('show');
                    
                    loadNews();
                });
            });
        }

        // Modal
        function openModal(news) {
            const modal = document.getElementById('modal');
            const modalBody = document.getElementById('modalBody');
            
            modalBody.innerHTML = `
                <div class="news-date">${news.date}</div>
                <h2 class="news-title" style="font-size: 2rem; margin-bottom: 1.5rem;">${news.title}</h2>
                <div class="news-image" style="margin-bottom: 2rem; font-size: 5rem; height: 300px;">
                    ${news.icon}
                </div>
                <p style="line-height: 1.8; font-size: 1.1rem; color: #555;">${news.content}</p>
                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #eee;">
                    <span class="news-category">${getCategoryName(news.category)}</span>
                </div>
            `;
            
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        // Click fuera del modal para cerrar
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target == modal) {
                closeModal();
            }
        }

        // Helpers
        function getCategoryName(category) {
            const names = {
                'oficina': 'Oficina',
                'living': 'Living',
                'dormitorio': 'Dormitorio',
                'cocina': 'Cocina'
            };
            return names[category] || category;
        }
    </script>
</body>
</html>