function handleLogin() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validar email y contraseña
    const validEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email || !validEmail.test(email)) {
        alert("Ingrese un correo válido.");
        return false; 
    }
    
    if (!password || password.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        return false;
    }

    // Simulación de validación (sin conexión a base de datos por ahora)
    const dummyUsers = [
        { email: "juan.perez@example.com", password: "123456", nombre: "Juan Pérez", rol: "usuario" },
        { email: "admin@example.com", password: "admin123", nombre: "Administrador", rol: "administrador" },
        { email: "seguridad@example.com", password: "seguridad123", nombre: "Seguridad", rol: "seguridad" }
    ];

    const user = dummyUsers.find(user => user.email === email && user.password === password);

    if (!user) {
        alert("Correo o contraseña incorrectos.");
        return false;
    }

    alert(`Bienvenido, ${user.nombre}.`);

    // Redirigir según el rol
    switch (user.rol) {
        case 'usuario':
            window.location.href = "../html/usuario.html";
            break;
        case 'seguridad':
            window.location.href = "../html/seguridad.html";
            break;
        case 'administrador':
            window.location.href = "../html/administrador.html";
            break;
        default:
            alert("Rol no válido");
    }
    
    return false;
}
