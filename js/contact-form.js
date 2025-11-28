const form = document.getElementById('contactForm');
const submitBtn = document.getElementById('submitBtn');
const btnText = document.getElementById('btnText');
const successMsg = document.getElementById('successMessage');
const errorMsg = document.getElementById('errorMessage');
const mensaje = document.getElementById('mensaje');

// Validación de longitud mínima del mensaje
mensaje?.addEventListener('input', function() {
    if (this.value.length < 20 && this.value.length > 0) {
        this.classList.add('border-red-500');
    } else {
        this.classList.remove('border-red-500');
    }
});

form?.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Validar longitud del mensaje
    if (mensaje.value.length < 20) {
        mensaje.classList.add('border-red-500');
        mensaje.focus();
        return;
    }

    // Deshabilitar botón y mostrar loading
    submitBtn.disabled = true;
    submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
    btnText.textContent = 'Enviando...';

    // Ocultar mensajes previos
    successMsg.classList.add('hidden');
    errorMsg.classList.add('hidden');

    try {
        const formData = new FormData(form);
        const response = await fetch('enviar.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.text();

        if (response.ok && result.includes('exitoso')) {
            successMsg.classList.remove('hidden');
            form.reset();
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            errorMsg.classList.remove('hidden');
            errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

    } catch (error) {
        errorMsg.classList.remove('hidden');
        errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
    } finally {
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
        btnText.textContent = 'Enviar Mensaje';
    }
});