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
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error_mensaje = 'Token de seguridad inválido';
    } else {
        $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $telefono = htmlspecialchars(trim($_POST['telefono'] ?? ''), ENT_QUOTES, 'UTF-8');
        $empresa = htmlspecialchars(trim($_POST['empresa'] ?? ''), ENT_QUOTES, 'UTF-8');
        $asunto = htmlspecialchars(trim($_POST['asunto'] ?? ''), ENT_QUOTES, 'UTF-8');
        $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''), ENT_QUOTES, 'UTF-8');

        $acepta_privacidad = isset($_POST['privacidad']);
        $captcha = intval($_POST['captcha'] ?? 0);
        
        $captcha_correcto = ($_SESSION['captcha_answer'] ?? '') == $captcha;
        
        if ($nombre && $email && $telefono && $asunto && $mensaje && $acepta_privacidad && $captcha_correcto && strlen($mensaje) >= 20) {
            $to = "guillediotti@gmail.com";
            $subject = "Nuevo mensaje de contacto: " . $asunto;
            $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nEmpresa: $empresa\nAsunto: $asunto\n\nMensaje:\n$mensaje";
            $headers = "From: $email\r\nReply-To: $to\r\n";
            
            mail($to, $subject, $body, $headers);
            
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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-contacto">
        <h1>Contacto:<span> Solocite más información</span></h1>
        <p>Nuestro equipo comercial le atenderá a la brevedad</p>
    </section>

    <!-- Form & Map Section -->
    <section class="section section-darker" id="contact-page">
        <div class="container">
            <div class="two-col-section">
                <!-- Formulario -->
                <div class="content-col">
                    <div class="card">
                        <?php if ($mensaje_enviado): ?>
                        <div class="alert alert-success mb-6">
                            <svg style="width: 24px; height: 24px; color: #10b981; margin-right: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p><strong>¡Mensaje enviado correctamente!</strong> Nos pondremos en contacto pronto.</p>
                        </div>
                        <?php endif; ?>

                        <?php if ($error_mensaje): ?>
                        <div class="alert alert-error mb-6">
                            <svg style="width: 24px; height: 24px; color: #ef4444; margin-right: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p><strong>Error:</strong> <?php echo htmlspecialchars($error_mensaje); ?></p>
                        </div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nombre">Nombre completo <span class="text-gold">*</span></label>
                                    <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez">
                                </div>
                                <div class="form-group">
                                    <label for="empresa">Empresa</label>
                                    <input type="text" id="empresa" name="empresa" placeholder="Mi Empresa S.A.">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-gold">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="juan@empresa.com">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono <span class="text-gold">*</span></label>
                                    <input type="tel" id="telefono" name="telefono" placeholder="+598 99 123 456">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="asunto">Asunto <span class="text-gold">*</span></label>
                                <select id="asunto" name="asunto">
                                    <option value="">Seleccione un asunto</option>
                                    <option value="Consulta general">Consulta general</option>
                                    <option value="Solicitud de cotización">Solicitud de cotización</option>
                                    <option value="Información de productos">Información de productos</option>
                                    <option value="Soporte técnico">Soporte técnico</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mensaje">Mensaje <span class="text-gold">*</span></label>
                                <textarea id="mensaje" name="mensaje" placeholder="Describe tu consulta o necesidad..."></textarea>
                                <p class="text-sm text-muted">Mínimo 20 caracteres</p>
                            </div>

                            <!-- Captcha -->
                            <div class="form-group" style="background: var(--tertiary-black); padding: 1rem; border-radius: 0.5rem; border: 1px solid var(--border-color);">
                                <label>Verificación de seguridad <span class="text-gold">*</span></label>
                                <div style="display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem;">
                                    <span class="text-lg font-bold">¿Cuánto es <?php echo $num1; ?> + <?php echo $num2; ?>?</span>
                                    <input type="number" name="captcha" placeholder="?" style="width: 80px; text-align: center; font-weight: 700; margin: 0;">
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; gap: 0.75rem; margin-bottom: 1.5rem;">
                                <input type="checkbox" id="privacidad" name="privacidad" style="width: 20px; height: 20px; margin: 4px 0 0 0; cursor: pointer;">
                                <label for="privacidad" style="margin: 0; font-size: 0.9rem; line-height: 1.6;">
                                    Acepto la política de privacidad y el tratamiento de mis datos personales <span class="text-gold">*</span>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                Enviar Mensaje
                            </button>

                        </form>
                    </div>
                </div>

                <!-- Mapa + Imagen -->
                <div class="image-col">
                    <!-- Mapa -->
                    <div class="card" style="padding: 1.5rem;">
                        <h3 class="font-bold mb-4">
                            <svg style="display: inline-block; width: 24px; height: 24px; color: var(--accent-gold); margin-right: 8px; vertical-align: middle;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Nuestra Ubicación
                        </h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.9438242813724!2d-56.22550787754762!3d-34.731161382642206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a1d2bd5adbc523%3A0x5e222260dd2296c9!2savenida%20muebles!5e0!3m2!1ses!2suy!4v1763731080135!5m2!1ses!2suy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>

</body>
</html>