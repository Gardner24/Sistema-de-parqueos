function handleLogin() {
    const role = document.getElementById('role').value;
    const code = document.getElementById('code').value;

    // Validar si el código cumple con el formato 
    const validCode = /^[A-Za-z0-9]{1,8}$/;
    if (!role || !code || !validCode.test(code)) {
        alert('Por favor, ingrese un código válido (solo letras y números, máx. 8 caracteres).');
        return false; 
    }

    // Mostrar mensaje de bienvenida y redirigir
    alert(`Bienvenido, ${role.charAt(0).toUpperCase() + role.slice(1)}.`);
    switch (role) {
        case 'usuario':
            window.location.href = "../html/usuario.html";
            break;
        case 'seguridad':
            window.location.href = './html/seguridad.html';
            break;
        case 'administrador':
            window.location.href = './html/administrador.html';
            break;
        default:
            alert('Rol no válido');
    }

    return false; 
}
