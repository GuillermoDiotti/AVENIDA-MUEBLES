<?php
$page = basename($_SERVER['PHP_SELF'], '.php');

// Títulos y descripciones por página
$seo = [
    'index' => [
        'title' => 'Avenida Muebles | Muebles para Hogar y Oficina en Uruguay',
        'description' => 'Avenida Muebles: 30 años de experiencia en muebles de calidad. Oficina, living, dormitorio y cocina. Envíos a todo Uruguay.'
    ],
    'catalogo' => [
        'title' => 'Catálogo 2025 | Avenida Muebles',
        'description' => 'Descarga nuestro catálogo digital 2025. Muebles para hogar y oficina con envío a todo Uruguay.'
    ],
    'nosotros' => [
        'title' => 'Sobre Nosotros | Avenida Muebles',
        'description' => 'Más de 30 años distribuyendo muebles de calidad en Uruguay. 7000m² de instalaciones en Las Piedras, Canelones.'
    ],
    'novedades' => [
        'title' => 'Novedades | Avenida Muebles',
        'description' => 'Últimas novedades en mobiliario. Nuevas líneas de oficina, living, dormitorio y cocina.'
    ],
    'contacto' => [
        'title' => 'Contacto | Avenida Muebles',
        'description' => 'Contacta con Avenida Muebles. Showroom en Las Piedras, Canelones. Tel: (598) 2365-6700'
    ]
];

$current = $seo[$page] ?? $seo['index'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $current['title']; ?></title>
    <meta name="description" content="<?php echo $current['description']; ?>">
    <link rel="canonical" href="https://avenidamuebles.com/<?php echo $page === 'index' ? '' : $page . '.php'; ?>">
    
    <meta property="og:title" content="<?php echo $current['title']; ?>">
    <meta property="og:description" content="<?php echo $current['description']; ?>">
    <meta property="og:image" content="https://avenidamuebles.com/img/logo-header.jpg">
    <meta property="og:url" content="https://avenidamuebles.com/<?php echo $page === 'index' ? '' : $page . '.php'; ?>">
    
    <!-- Favicons -->
    <link rel="icon" href="/img/logo-header.jpg">
    <link rel="apple-touch-icon" href="/img/logo-header.jpg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
