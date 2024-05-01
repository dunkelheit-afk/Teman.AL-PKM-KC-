<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include '../includes/config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
?>


<!DOCTYPE html>
<html lang="en">
<section>
    <div class="container">
        <div class="konten">
            <div class="gambar">
                <img src="../assets/images/User 03C.png" alt="Foto profil pengguna">
            </div>
            <?php
            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
            ?>
                <div class="teks">
                    <h1><?php echo $row['name'];?></h1>
                    <p>Selamat Datang!!</p>
            </div>
            <div class="tombol">
            <button class="sunting keluar"><span></span><a href="logout.php">Keluar</a></button>
            <button class="sunting sunting-profil"><span></span><a href="#">Sunting Profil</a></button>
            </div>
            <?php
            }
            ?>
        </div>
            <div class="container">
                    <div class="maps">
                <img src="../assets/images/image.png">
                <p>©2024 Teman.AL by Macipir Team</p>
            </div>
            </div>
            </div>
    </div>
</section>
</html>