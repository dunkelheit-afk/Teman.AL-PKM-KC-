<?php
// PHP code here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Teman.AL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"
    /> 
    <link rel="stylesheet" href="styles/css/index.css">
</head>
<body>

    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">Teman.AL</div>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </nav>

            <!-- akhir dekstop menu -->

            <nav class="mobile-nav">
                <div class="logo">Teman.AL</div>
                <div class="menu-icon">
                    <img src="assets/images/menu-icon.svg" alt="" />
                </div>
            </nav>

            <div class="mobile-menu-container">
                <div class="close-icon">
                    <img src="assets/images/close-icon.svg" alt="" />
                </div>

                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>

            <!-- akhir mobile menu -->

            <div class="hero-section">
                <div class="left">
                    <h2>Halo, Selamat Datang</h2>
                    <h1>Lacak orang tersayang anda</h1>
                    <p>
                        Jasa untuk melacak maupun informasi berupa kepada penyandang Alzheimer
                    </p>

                    <a href="modules/registration.php" class="btn">Daftar</a>
                    <a href="modules/index.php" class="btn">Login</a>
                </div>
                <div class="Right">
                    <img src="assets/images/2hp.png" alt="">
                </div>
            </div>
        </div>
    </header>

            <!-- Header beres -->

    <div class="bgkonten">
            <section class="penawaran">
                <div class="wrapper">
                <div class="tawar">
                    <h4> Pelayanan kami</h4>
                    <h2> Apa yang <br> kami Tawarkan</h2>
                </div>
                <div class="container">
                    <div class="kartu-produk">
                        <img src="assets/images/GPS.png" alt=""> 
                        <img src="assets/images/QRCODE.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>

            <!-- Penawaran produk beres -->
        
            <div class="wrapper">
                <section class="team-kami">
                    <div class="nama">
                        <h2> Team kami</h2>
                    </div>
                <div class="box">
                    <div class="team">
                        <img src="assets/images/Adam.png" alt="">
                        <img src="assets/images/arca.png" alt="">
                        <img src="assets/images/Jeong.png" alt="">
                        <img src="assets/images/tere.png" alt="">
                        <img src="assets/images/Januario.svg" alt="">
                    </div>    
                </section>
            </div>
            <!-- Team Kami beres hehehehe -->

         <footer>
                <div class="bgkonten2">
                    <section class="link-container">
                            <div class="link">
                                <h5>Home</h5>
                                <ul>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Kontak Kami</a></li>
                                    <li><a href="#">Kebijakan Privasi dan Ketentuan</a></li>
                                </ul>
                            </div>
            
                            <div class="link">
                                <h5>Konten</h5>
                                <ul>
                                    <li><a href="#">Masuk</a></li>
                                    <li><a href="#">Unduh</a></li>
                                </ul>
                            </div>
            
                            <div class="link">
                                <h5>Kontak Team kami</h5>
                                <div class="sosial">
                                    <ul>
                                        <li><a href="#"> <img src="assets/images/🦆 icon _profile circled_.png" alt="Email Icon"> Macipir@email.com</a></li>
                                        <li><a href="#"> <img src="assets/images/🦆 icon _instagram_.png" alt="Instagram Icon"> Macipir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>           
                            <p>This website is developed by Macipir ©2024</p>
                        </div>
                  
                </div>
            </footer>
            

            <!-- beress footer -->



    <script src="styles/js/main.js"></script>
  </body>
</html>