<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Bentornato, accedi per vedere i nuovi arrivi!</h1>
</header>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
      <h3 class="text-center mb-4">Login</h3>
      <form id="loginForm" method="POST" action="">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Accedi</button>
      </form>
      <div id="loginMessage" class="mt-3 text-center"></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
