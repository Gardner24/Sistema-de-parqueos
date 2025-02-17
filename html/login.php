<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcon Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div id="loading-screen">
        <div class="spinner"></div>
        <p id="welcome-message" class="text-white mt-3" style="font-size: 1.5rem; text-align: center; display: none;"></p>
    </div>

    <div class="login-card">
        <h3 class="text-center mb-4">Falcon Space</h3>
        <form id="loginForm" onsubmit="return handleLogin();">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Ingresar</button>
        </form>
    </div>

    <script src="./js/login.js"></script>
</body>
</html>
