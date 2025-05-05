<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="user-info">
                <img src="assets/img/avatar.svg" alt="Avatar del Usuario" class="avatar">
                <h3>Nombre del Usuario</h3>
                <p>Cargo del Usuario</p>
                <p id="system-time"></p>
                <button class="logout-btn">Cerrar Sesión</button>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Ventas</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Usuarios</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <h1>Bienvenido al Dashboard</h1>
            <div class="cards-container">
                <div class="card">
                    <h2>Ventas del Mes</h2>
                    <p>Q100,000</p>
                </div>
                <div class="card">
                    <h2>Usuarios</h2>
                    <p>120</p>
                </div>
            </div>
        </main>
    </div>
    <!-- Hora del sistema -->
    <script>
        function updateSystemTime() {
            const timeElement = document.getElementById('system-time');
            const now = new Date();
            timeElement.textContent = now.toLocaleTimeString();
        }
        setInterval(updateSystemTime, 1000);
        updateSystemTime();
    </script>
</body>
</html>
