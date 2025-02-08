<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style/style.css" />
  
  <title>Formulario de contacto</title>

  <style>
    .autor { font-size: 11px; text-align: center; }
    .autor a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
  <div id="alert-success" class="alert alert-success d-none" role="alert">
    <h4 class="alert-heading">¡Mensaje enviado!</h4>
    <p>Gracias por completar el formulario. ¡Nos pondremos en contacto pronto!</p>
  </div>
  <div class="container vh-100 d-flex align-items-center">
    <div class="contact-form">
      <label class="form-label mb-3 bold-size">Contactanos</label>
      <form class="row g-3 needs-validation" method="POST" action="./registrar.php" id="form" novalidate>
        <div class="row mb-3">
          <div class="col">
            <label for="nombreId" class="form-label">Nombre *</label>
            <input type="text" class="form-control bor-tint" id="nombreId" name="nombre" required />
            <div class="invalid-feedback">Este campo es obligatorio</div>
          </div>
          <div class="col">
            <label for="apellidoId" class="form-label">Apellidos *</label>
            <input type="text" class="form-control bor-tint" id="apellidoId" name="apellido" required />
            <div class="invalid-feedback">Este campo es obligatorio</div>
          </div>
        </div>
        <div class="mb-3">
          <label for="emailId" class="form-label">Dirección de correo electrónico *</label>
          <input type="email" class="form-control bor-tint" id="emailId" name="email" required />
          <div class="invalid-feedback">
            Por favor, introduce una dirección de correo electrónico válida.
            <br>
            Este campo es obligatorio
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Tipo de consulta *</label>
          <div class="radio-group">
            <div class="radio-option">
              <input type="radio" name="queryType" value="general" id="general" class="form-check-input" required>
              <label for="general">Consulta general</label>
            </div>
            <div class="radio-option">
              <input type="radio" name="queryType" value="soporte" id="support" class="form-check-input" required>
              <label for="support">Solicitud de soporte</label>
            </div>
          </div>
          <label id="radio-error" class="text-danger" style="display: none;">Por favor, selecciona un tipo de consulta</label>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje *</label>
          <textarea id="mensaje" class="form-control bor-tint" name="mensaje" rows="3" required></textarea>
          <div class="invalid-feedback">Este campo es obligatorio</div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" id="consent" class="form-check-input" required>
          <label for="consent" class="form-check-label">Autorizó para ser contactado por el equipo *</label>
          <div class="invalid-feedback">Para enviar este formulario, por favor consiente ser contactado</div>
        </div>
        <button type="submit" class="btn btn-submit">Enviar</button>
      </form>
    </div>
  </div>         
  <script src="./scripts/script.js"></script>
  <div class="autor">
    Formulario de contacto @2025</a>. 
    Desarrollado por <a href="https://www.youtube.com/@manueladrianhernandezmoren5390">Manuel Adrian Hernandez Moreno</a>.
  </div>
  <?php
    if (!empty($error_message)) {
        echo "<div class='alert alert-danger'>$error_message</div>";
    } elseif (!empty($success_message)) {
        echo "<div class='alert alert-success'>$success_message</div>";
    } 
  ?>
</body>
</html>