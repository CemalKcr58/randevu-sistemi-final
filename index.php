<?php
session_start(); // Oturum başlat
include('connect.php');

$error = ''; // Hata mesajı için boş değişken

if (isset($_POST['girisyap'])) {
    // Formdan gelen verileri alıyoruz
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Veritabanında kullanıcıyı ve şifreyi kontrol et (prepared statement ile)
    $query = "SELECT * FROM hesaplar WHERE kullanici_adi = ? AND sifre = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            // Giriş başarılıysa oturuma kullanıcı adını kaydet
            $_SESSION['username'] = $username;
            header("Location: Anasayfa.php");
            exit;
        } else {
            $error = "Kullanıcı adı veya şifre hatalı!";
        }

        mysqli_stmt_close($stmt);
    } else {
        $error = "Sorgu hazırlanırken hata oluştu.";
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Randevu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container" id="login-container">
        <h2 id="login-header">Giriş Yap</h2>
        <?php if (!empty($error)): ?>
            <div style="color:red; margin-bottom:10px;"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" id="login-form">
            <div class="input-group" id="username-group">
                <label for="username">E-Posta</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group" id="password-group">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" id="login-btn" name="girisyap">Giriş Yap</button>
            <div class="signup-link" id="signup-link">
                <p>Hesabınız yok mu? <a href="kayit.html">Kayıt ol</a></p>
            </div>
        </form>
    </div>
</body>
</html>
