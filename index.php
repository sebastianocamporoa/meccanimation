<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<body>
  <div class="d-flex align-items-center justify-content-center flex-column" style="height: 100vh">
    <h1 class="h1">Bienveni@</h1>
    <h2 class="h2">Ingresa tu cedula</h2>
    <form action="" method="post">
      <?php include('includes/login.php'); ?>
      <!-- Cedula input -->
      <div class="form-outline mb-4">
        <input type="text" id="cedula" name="cedula" class="form-control" required>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" name="terminos" id="terminos" required>
            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
          </div>
        </div>
      </div>

      <!-- Submit button -->
      <input name="btnLogin" class="btn btn-primary btn-block mb-4" type="submit" value="Ingresar">
    </form>
  </div>
</body>

<?php include('includes/footer.php'); ?>