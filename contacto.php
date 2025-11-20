<?php
session_start();

// Generar CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Procesar el formulario
$mensaje_enviado = false;
$error_mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error_mensaje = 'Token de seguridad inválido';
    } else {
        // Validar campos
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
        $asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_STRING);
        $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);
        $acepta_privacidad = isset($_POST['privacidad']);
        $captcha = filter_input(INPUT_POST, 'captcha', FILTER_SANITIZE_STRING);
        
        // Validar captcha
        $captcha_correcto = ($_SESSION['captcha_answer'] ?? '') == $captcha;
        
        if ($nombre && $email && $telefono && $asunto && $mensaje && $acepta_privacidad && $captcha_correcto && strlen($mensaje) >= 20) {
            // Aquí enviarías el email
            $to = "info@avenidamuebles.com"; // Cambiar por tu email
            $subject = "Nuevo mensaje de contacto: " . $asunto;
            $body = "Nombre: $nombre\n";
            $body .= "Email: $email\n";
            $body .= "Teléfono: $telefono\n";
            $body .= "Empresa: $empresa\n";
            $body .= "Asunto: $asunto\n\n";
            $body .= "Mensaje:\n$mensaje";
            
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            
            // mail($to, $subject, $body, $headers); // Descomentar para enviar email real
            
            $mensaje_enviado = true;
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        } else {
            if (!$captcha_correcto) {
                $error_mensaje = 'Respuesta del captcha incorrecta.';
            } else if (strlen($mensaje) < 20) {
                $error_mensaje = 'El mensaje debe tener al menos 20 caracteres.';
            } else {
                $error_mensaje = 'Por favor complete todos los campos obligatorios.';
            }
        }
    }
}

// Generar captcha simple
$num1 = rand(1, 9);
$num2 = rand(1, 9);
$_SESSION['captcha_answer'] = $num1 + $num2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Avenida Muebles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }

        #map {
            height: 450px;
            border-radius: 1rem;
            overflow: hidden;
        }

        .hero-contact {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.95), rgba(29, 78, 216, 0.95)),
                        url('https://images.unsplash.com/photo-1556228720-195a672e8a03?w=1920') center/cover;
            position: relative;
        }

        .hero-contact::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.3), transparent 50%);
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

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .delay-100 { animation-delay: 0.1s; opacity: 0; }
        .delay-200 { animation-delay: 0.2s; opacity: 0; }
        .delay-300 { animation-delay: 0.3s; opacity: 0; }
        .delay-400 { animation-delay: 0.4s; opacity: 0; }

        .contact-card {
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .leaflet-popup-content-wrapper {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Animación del botón de enviar */
        .btn-submit {
            position: relative;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-submit:hover::before {
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body class="bg-white dark:bg-slate-900 transition-colors duration-300">

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-contact relative py-20 md:py-32 overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-fade-in-up">
                Entre em Contato
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up delay-100">
                Estamos prontos para atender você e transformar seus projetos em realidade
            </p>
        </div>
        
        <!-- Decorative elements -->
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white dark:from-slate-900 to-transparent"></div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-12 bg-white dark:bg-slate-900 -mt-16 relative z-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-6">
                
                <div class="contact-card bg-slate-50 dark:bg-slate-800 rounded-2xl p-6 border border-slate-200 dark:border-slate-700 animate-fade-in-up delay-100">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Teléfono</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">+598 2 123 4567</p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">+598 99 123 456</p>
                </div>

                <div class="contact-card bg-slate-50 dark:bg-slate-800 rounded-2xl p-6 border border-slate-200 dark:border-slate-700 animate-fade-in-up delay-200">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Email</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">info@avenidamuebles.com</p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">ventas@avenidamuebles.com</p>
                </div>

                <div class="contact-card bg-slate-50 dark:bg-slate-800 rounded-2xl p-6 border border-slate-200 dark:border-slate-700 animate-fade-in-up delay-300">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Horário</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Lun - Vie: 9:00 - 18:00</p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Sábado: 9:00 - 13:00</p>
                </div>

                <div class="contact-card bg-slate-50 dark:bg-slate-800 rounded-2xl p-6 border border-slate-200 dark:border-slate-700 animate-fade-in-up delay-400">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Dirección</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Av. 18 de Julio 1234</p>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Montevideo, Uruguay</p>
                </div>

            </div>
        </div>
    </section>

        <!-- Sección Contacto -->
    <section id="contacto" class="py-16 bg-white dark:bg-slate-900">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-slate-800 dark:text-white mb-4">Solicite Información</h2>
                <p class="text-slate-600 dark:text-slate-300 text-lg">Nuestro equipo comercial le atenderá a la brevedad</p>
            </div>

            <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl shadow-2xl p-8 md:p-12 border border-slate-200 dark:border-slate-700">
                
                <!-- Success Message -->
                <div id="successMessage" class="hidden mb-6 bg-green-50 dark:bg-green-900/30 border-l-4 border-green-500 p-4 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-green-800 dark:text-green-200 font-semibold">¡Mensaje enviado correctamente! Nos pondremos en contacto pronto.</p>
                    </div>
                </div>

                <!-- Error Message -->
                <div id="errorMessage" class="hidden mb-6 bg-red-50 dark:bg-red-900/30 border-l-4 border-red-500 p-4 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-red-800 dark:text-red-200 font-semibold">Error al enviar el mensaje. Por favor intente nuevamente.</p>
                    </div>
                </div>

                <form id="contactForm" action="enviar.php" method="POST" class="space-y-6">
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="nombre">
                                Nombre completo <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="nombre" 
                                name="nombre" 
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                                placeholder="Juan Pérez"
                            >
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="empresa">
                                Empresa
                            </label>
                            <input 
                                type="text" 
                                id="empresa" 
                                name="empresa"
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                                placeholder="Mi Empresa S.A."
                            >
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="email">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                                placeholder="juan@empresa.com"
                            >
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="telefono">
                                Teléfono <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="tel" 
                                id="telefono" 
                                name="telefono" 
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                                placeholder="+598 99 123 456"
                            >
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="asunto">
                            Asunto <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="asunto" 
                            name="asunto" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                        >
                            <option value="">Seleccione un asunto</option>
                            <option value="Consulta general">Consulta general</option>
                            <option value="Solicitud de cotización">Solicitud de cotización</option>
                            <option value="Información de productos">Información de productos</option>
                            <option value="Soporte técnico">Soporte técnico</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="mensaje">
                            Mensaje <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="mensaje" 
                            name="mensaje" 
                            required
                            rows="6"
                            class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none resize-none"
                            placeholder="Describe tu consulta o necesidad..."
                        ></textarea>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">Mínimo 20 caracteres</p>
                    </div>

                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="privacidad" 
                            name="privacidad" 
                            required
                            class="mt-1 w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500"
                        >
                        <label for="privacidad" class="ml-3 text-sm text-slate-600 dark:text-slate-300">
                            Acepto la política de privacidad y el tratamiento de mis datos personales <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <div class="pt-4">
                        <button 
                            type="submit" 
                            id="submitBtn"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200 flex items-center justify-center"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span id="btnText">Enviar Mensaje</span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- Form & Map Section -->
    <section class="py-16 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Mapa -->
                <div class="bg-white dark:bg-slate-700 rounded-2xl shadow-2xl p-6 border border-slate-200 dark:border-slate-600">
                    <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Nuestra Ubicación
                    </h3>
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Inicializar mapa
        document.addEventListener('DOMContentLoaded', function() {
            // Coordenadas de Montevideo - cambiar por la ubicación real
            const lat = -34.9011;
            const lng = -56.1645;

            const map = L.map('map').setView([lat, lng], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Marcador con popup
            const marker = L.marker([lat, lng]).addTo(map);
            marker.bindPopup('<div style="text-align: center; padding: 10px;"><strong style="font-size: 16px; color: #1e40af;">Avenida Muebles</strong><br><span style="color: #64748b;">Av. 18 de Julio 1234<br>Montevideo, Uruguay</span></div>').openPopup();
        });
    </script>

</body>
</html>