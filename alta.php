<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'TriniM') {
    header("Location: login.php");
    exit();
}

$servername = "localhost:3306";
$username   = "grupoisc_victor";
$password   = "DYuCH^KZA.vb";
$dbname     = "grupoisc_ejemplo";

try {
    // Conexión con charset utf8mb4 para soportar tildes y caracteres especiales
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // === 1. CARGAR TODOS LOS NOMBRES DESDE Autorizacion (JSON) ===
    $stmt = $conn->query(
        "SELECT id, Autorizacion 
         FROM Reclutamiento 
         WHERE Autorizacion IS NOT NULL 
           AND Autorizacion != ''"
    );

    $nombres_db    = [];
    $nombre_a_id   = []; // nombre → id de Reclutamiento

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $json = json_decode($row['Autorizacion'], true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            // Opcional: loggear JSON mal formados
            // error_log("JSON inválido en id {$row['id']}: " . json_last_error_msg());
            continue;
        }

        if (is_array($json) && isset($json['nombre'])) {
            $nombre = trim((string)$json['nombre']);
            if ($nombre !== '') {
                // Evitamos duplicados (tomamos el último id encontrado)
                $nombres_db[$nombre] = $nombre;
                $nombre_a_id[$nombre] = $row['id'];
            }
        }
    }

    ksort($nombres_db); // Orden alfabético por nombre

    // === DEPURACIÓN (descomenta para ver qué nombres se cargaron realmente) ===
    /*
    echo "<pre style='background:#fff; padding:15px; border:1px solid #ccc; max-height:400px; overflow:auto;'>";
    echo "Nombres cargados desde BD (" . count($nombres_db) . "):\n";
    print_r($nombres_db);
    echo "\n\nMapeo nombre → id:\n";
    print_r($nombre_a_id);
    echo "</pre>";
    // die();  // descomenta si quieres detener la página aquí
    */

    $mensaje = "";
    $mensaje_clase = "";

    // === 2. PROCESAR EL FORMULARIO ===
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_seleccionado = trim($_POST['nombre'] ?? '');
        $aduana              = trim($_POST['aduana'] ?? '');
        $fecha_cumple        = $_POST['fecha'] ?? '';
        $email               = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $fecha_ingreso       = $_POST['fecha_ingreso'] ?? '';
        $departamento        = trim($_POST['departamento'] ?? '');
        $cargo               = trim($_POST['cargo'] ?? '');
        $jefe                = trim($_POST['jefe'] ?? '');
        $area                = trim($_POST['area'] ?? '');
        $sueldo              = filter_input(INPUT_POST, 'sueldo', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        // Validación básica
        if (!$nombre_seleccionado || !$aduana || !$fecha_cumple || !$email || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
            !$fecha_ingreso || !$departamento || !$cargo || !$jefe || !$area || $sueldo === false || $sueldo < 0) {
            $mensaje = "Todos los campos son obligatorios y deben ser válidos.";
            $mensaje_clase = "text-red-700 bg-red-50 border border-red-200";
        } else {
            // Buscar el ID correspondiente
            $id_persona = $nombre_a_id[$nombre_seleccionado] ?? null;

            if (!$id_persona) {
                $mensaje = "Error: No se encontró el ID de la persona '$nombre_seleccionado' en Reclutamiento.";
                $mensaje_clase = "text-red-700 bg-red-50 border border-red-200";
            } else {
                // === INSERT en cumpleS ===
                $stmt = $conn->prepare("INSERT INTO cumpleS (nombre, aduana, fecha, email) VALUES (?, ?, ?, ?)");
                $stmt->execute([$nombre_seleccionado, $aduana, $fecha_cumple, $email]);

                // === INSERT en vacaciones ===
                $stmt = $conn->prepare("INSERT INTO vacaciones (nombre, fecha_ingreso, aduana, departamento, cargo, jefe, area, correo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$nombre_seleccionado, $fecha_ingreso, $aduana, $departamento, $cargo, $jefe, $area, $email]);

                // === ACTUALIZAR sueldo en Reclutamiento ===
                $stmt = $conn->prepare("UPDATE Reclutamiento SET sueldo = ? WHERE id = ?");
                $stmt->execute([$sueldo, $id_persona]);

                $mensaje = "<strong>¡ÉXITO!</strong><br>
                            Colaborador: <strong>" . htmlspecialchars($nombre_seleccionado) . "</strong><br>
                            Sueldo actualizado: <strong>$" . number_format($sueldo, 2) . " MXN</strong><br>
                            <a href='visor_perfecto.php?id=$id_persona' class='text-blue-600 underline font-bold'>
                                → Ver / Subir documentos
                            </a>";
                $mensaje_clase = "text-green-700 bg-green-50 border border-green-300";
            }
        }
    }
} catch (PDOException $e) {
    $mensaje = "Error de base de datos: " . htmlspecialchars($e->getMessage());
    $mensaje_clase = "text-red-700 bg-red-50 border border-red-200";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registro + Sueldo (Actualiza Reclutamiento)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .mensaje { @apply p-5 rounded-xl text-center font-medium text-lg; }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
  <div class="bg-white p-10 rounded-3xl shadow-2xl max-w-4xl w-full">
    <h2 class="text-4xl font-bold text-center text-indigo-700 mb-8">Registro de  </h2>

    <?php if ($mensaje): ?>
      <div class="mensaje <?= $mensaje_clase ?> mb-8 border-2">
        <?= $mensaje ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Nombre completo</label>
          <select name="nombre" required class="w-full px-5 py-3 border-2 rounded-xl focus:ring-4 focus:ring-indigo-300">
            <option value="">Selecciona colaborador...</option>
            <?php foreach ($nombres_db as $nombre): ?>
              <option value="<?= htmlspecialchars($nombre) ?>"><?= htmlspecialchars($nombre) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Aduana</label>
          <select name="aduana" required class="w-full px-5 py-3 border-2 rounded-xl focus:ring-4 focus:ring-indigo-300">
            <option value="">Selecciona aduana...</option>
            <option>Manzanillo</option>
            <option>Silao</option>
            <option>Guadalajara</option>
            <option>CDMX</option>
            <option>Dragón</option>
            <option>Otro</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Cumpleaños</label>
          <input type="date" name="fecha" required class="w-full px-5 py-3 border-2 rounded-xl">
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Fecha de ingreso</label>
          <input type="date" name="fecha_ingreso" required class="w-full px-5 py-3 border-2 rounded-xl">
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Departamento</label>
          <select name="departamento" required class="w-full px-5 py-3 border-2 rounded-xl">
            <option value="">Selecciona...</option>
            <option>CONTABILIDAD</option>
            <option>TRAFICO</option>
            <option>IT</option>
            <option>OPERACION</option>
            <option>DIRECCION</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Cargo</label>
          <select name="cargo" required class="w-full px-5 py-3 border-2 rounded-xl">
            <option value="">Selecciona...</option>
            <option>empleado</option>
            <option>jefe</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Jefe directo</label>
          <select name="jefe" required class="w-full px-5 py-3 border-2 rounded-xl">
            <option value="">Selecciona...</option>
            <option>blanca</option>
            <option>thelma</option>
            <option>david</option>
            <option>jose</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Área / Responsable</label>
          <select name="area" required class="w-full px-5 py-3 border-2 rounded-xl">
            <option value="">Selecciona...</option>
            <option>alma</option><option>sofia</option><option>celeste</option><option>jesica</option>
            <option>ana</option><option>maria</option><option>andres</option><option>sama</option>
            <option>isa</option><option>memo</option><option>yesiania</option><option>Griselda</option>
            <option>ludin</option><option>magonlia</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Correo electrónico</label>
          <input type="email" name="email" required class="w-full px-5 py-3 border-2 rounded-xl" placeholder="juan@empresa.com">
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-2">Sueldo diario (MXN)</label>
          <input type="number" step="0.01" min="0" name="sueldo" required class="w-full px-5 py-3 border-2 rounded-xl" placeholder="15000.00">
        </div>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-700 text-white font-bold text-xl py-5 rounded-xl hover:from-indigo-700 hover:to-purple-800 transform hover:scale-105 transition shadow-2xl">
        REGISTRAR + ACTUALIZAR SUELDO
      </button>
    </form>

    <div class="mt-8 text-center">
      <a href="logout.php" class="text-indigo-600 hover:underline text-sm font-medium">Cerrar sesión</a>
    </div>
  </div>
</body>
</html>