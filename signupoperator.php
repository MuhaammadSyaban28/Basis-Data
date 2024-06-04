<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="stylesignup.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="process_signupoperator.php" method="POST">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="username" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="no_tlp" placeholder="No Telp" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <button type="submit">Sign Up</button>
        </form>
        <p class="signup-text">Sudah punya akun? <a href="loginoperator.php">Login</a></p>

        <!-- Pesan peringatan akan ditampilkan di sini -->
        <?php
        if(isset($_GET['error'])) {
            $error = $_GET['error'];
            echo "<div class='error-message'>$error</div>";
        }
        ?>
    </div>
</body>
</html>
