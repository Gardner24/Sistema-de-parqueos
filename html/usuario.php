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
    <div class="login-card">
        <h3 class="text-center mb-4">Falcon Space</h3>
        <form id="loginForm">
            <div class="mb-3">
                <label for="role" class="form-label">Seleccionar Rol</label>
                <select class="form-select" id="role" required>
                    <option value="" disabled selected>Seleccione su rol</option>
                    <option value="usuario">Usuario</option>
                    <option value="seguridad">Seguridad</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Código de Ingreso</label>
                <input type="password" class="form-control" id="code" placeholder="Ingrese su código de ingreso" maxlength="8" pattern="[A-Za-z0-9]{1,8}" title="El código debe contener solo letras y números, máximo 8 caracteres" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Ingresar</button>
        </form>     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>
