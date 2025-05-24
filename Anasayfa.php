<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa - Randevu Sistemi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="Anasayfa.php">Anasayfa</a></li>
            <li><a href="randevularim.html">Randevularım</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
        </ul>
    </nav>

    <!-- Ana İçerik -->
    <div class="main-container">
        <h1>Randevu Sistemi</h1>
        <p>Buradan hızlı ve kolayca randevu alabilirsiniz</p>

        <!-- Aktif Hizmetler -->
        <div class="service-options">
            <div class="service-item">
                <h3>Berber</h3>
                <p>Erkek saç kesimi, sakal tıraşı ve bakım hizmetleri.</p>
                <button><a href="berber.html">Randevu Al</a></button>
            </div>

            <div class="service-item">
                <h3>Kuaför</h3>
                <p>Saç şekillendirme, kadın & erkek saç bakımı.</p>
                <button><a href="kuafor.html">Randevu Al</a></button>
            </div>
        </div>

        <!-- Yakında Hizmette -->
        <h2 style="margin-top: 60px; color: #333;">🎉 Yakında Hizmetinizde!</h2>
        <div class="service-options">
            <div class="service-item coming-soon">
                <h3>Diş Hekimliği</h3>
                <p>Diş tedavisi, beyazlatma ve rutin kontroller.</p>
                <p><em>Çok yakında sizlerle!</em></p>
            </div>

            <div class="service-item coming-soon">
                <h3>Oto Tamir</h3>
                <p>Arabalara en iyi şekilde bakım yapmak için.</p>
                <p><em>Hazırlık aşamasında...</em></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#"><img src="images/download.jpg" alt="Instagram">Instagram</a>
            <a href="#"><img src="images/download.png" alt="Twitter">Twitter</a>
            <a href="#"><img src="images/yeni/download.jpg" alt="Mail">Mail</a>
        </div>
        <p>&copy; 2025 Randevu Sistemi. Tüm hakları saklıdır.</p>
    </footer>

</body>
</html>
