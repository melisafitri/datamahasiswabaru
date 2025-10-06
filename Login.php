<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Data Mahasiswa Baru</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #E9ECEF;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 350px;
    }

    h2 {
      margin-bottom: 30px;
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      font-size: 14px;
      color: #555;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1.5px solid #C9D6DF;
      border-radius: 8px;
      margin-top: 6px;
      font-size: 14px;
    }

    .remember-me {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 15px;
      font-size: 14px;
      color: #555;
    }

    button {
      width: 100%;
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
      display: none;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Data Mahasiswa Baru</h2>

    <div class="error" id="error-message">Username atau Password salah!</div>

    <form id="loginForm">
      <div class="input-group">
        <label>Username</label>
        <input type="text" id="username" placeholder="Masukkan username" required>
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" id="password" placeholder="Masukkan password" required>
      </div>

      <div class="remember-me">
        <input type="checkbox" id="remember">
        <label for="remember" style="margin-left: 5px;">Ingatkan saya</label>
      </div>

      <button type="submit" href="Beranda.php">Masuk</button>
    </form>
  </div>


</body>
</html>
