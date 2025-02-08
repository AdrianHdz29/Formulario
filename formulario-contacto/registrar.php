<?php
include './conexion.php'; // Incluir la conexión a la BD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y sanitizarlos
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $email = $conn->real_escape_string($_POST['email']);
    $consulta = $conn->real_escape_string($_POST['queryType']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    // Validar que los campos obligatorios no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($consulta) || empty($mensaje)) {
        echo "<script>
                alert('Por favor, completa todos los campos obligatorios.');
                window.location.href = 'index.php';
              </script>";
        exit();
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO reportes (Nombre, Apellido, Email, TipoConsulta, Mensaje) 
            VALUES ('$nombre', '$apellido', '$email', '$consulta', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Consulta enviada correctamente.');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al enviar la consulta: " . $conn->error . "');
                window.location.href = 'index.php';
              </script>";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si se accede directamente a este archivo sin un POST
    echo "<script>
            alert('Acceso no permitido.');
            window.location.href = 'index.php';
          </script>";
}
?>