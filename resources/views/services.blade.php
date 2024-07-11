<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeteneklerimiz</title>
    <link rel="icon" type="image/png" href="/images/icon.jpg">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../script.js"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="home_page.html" class="navbar-logo">
            <img src="/images/logo.svg" alt="Logo">
        </a>
        <div class="navbar-toggle" onclick="toggleNavbar()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="navbar-links">
            <li><a href="home_page.html">Ana Sayfa</a></li>
            <li><a href="about_me.html">Hakkımızda</a></li>
            <li><a href="services.html">Yeteneklerimiz</a></li>
            <li><a href="projects.html">Projelerimiz</a></li>
            <li><a href="contact.html">İletişim</a></li>
        </ul>
    </nav>

    <!-- OTHERS-->
    <div class="services_container">
        <div class="services_1 ">

            <h4>Neler Yapıyoruz?</h4>
            <h2>Atölyemizde, kurum ve bireylerin hayallerine hizmet eden yaratıcı ve akılcı çözümler üretiyoruz.
            </h2>
        </div>
        <div class="services">


            <div class="services_inside">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-container">
                            <img src="/images/yazilim.svg" alt="Yazılım İkon">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>YAZILIM ATÖLYESİ</h3>
                    </div>
                    <h2>Kişi ve kurumlara özel yazılımlar, sektörel otomasyon çözümleri, B2B, B2C, ERP, CRM ve SaaS/PaaS
                        web platform hizmeti sunuyoruz.</h2>
                </div>
            </div>


            <div class="services_inside">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-container">
                            <img src="/images/tasarim.svg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>TASARIM ATÖLYESİ</h3>
                    </div>
                </div>
                <h2>Profesyonel ekibimizle; mimari, iç mimari, endüstriyel ürün, kurumsal kimlik, web arayüz & grafik
                    tasarım hizmetleri veriyoruz.</h2>
            </div>



            <div class="services_inside">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-container">
                            <img src="/images/robotik.svg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>ELEKTRONİK ATÖLYESİ</h3>
                    </div>
                </div>
                <h2>Endüstri 4.0 ve nesnelerin interneti alanlarında ar-ge projeleri yürütüyor, özgün yazılımlarla
                    elektronik tasarımları buluşturuyoruz.</h2>
            </div>



            <div class="services_inside">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-container">
                            <img src="/images/idea.svg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>FİKİR ATÖLYESİ</h3>
                    </div>
                </div>
                <h2>Proje ve girişimcilik fikirlerinizi uzman ekibimizle birlikte geliştirerek hayata geçirmeniz için
                    gerekli tüm planlamayı sağlıyoruz.
                </h2>
            </div>


        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer_container">
            <div class="footer_1"><img src="../images/footer.png" alt=""></div>
            <div class="footer_2">
                <p class="footer_text_1">Site Haritası</p>
                <ul class="footer_links">
                    <li><a href="#">Anasayfa</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">Hizmetlerimiz</a></li>
                    <li><a href="#">İletişim</a></li>
                </ul>

            </div>

            <div class="footer_2">
                <p class="footer_text_1">İletişim</p>
                <p class="footer_text_2"><a href="tel:(+90) 850 346 84 60">(+90) 850 346 84 60</a></p>
                <p class="footer_text_2"><a href="mailto:info@artf4.com">info@artf4.com</a></p>
                <p class="footer_text_2"><a
                        href="https://www.google.com.tr/maps/place/ArtF4+%7C+Proje+At%C3%B6lyesi/@37.02759,37.307386,15z/data=!4m5!3m4!1s0x0:0x1591f8445948c7bd!8m2!3d37.02759!4d37.307386">Gaziantep
                        Üniversitesi Teknopark, C Blok, No: 203 Şahinbey | Gaziantep | Türkiye</a>
                </p>
            </div>

            <div class="footer_2">
                <p class="footer_text_1">Bizi Takip Et</p>
                <div class="social_buttons">
                    <a href="https://www.facebook.com/ArtF4com/" class="social_button">
                        <i class="fa-brands fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://twitter.com/artf4com" class="social_button">
                        <i class="fa-brands fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                    <a href="https://tr.linkedin.com/company/artf4" class="social_button">
                        <i class="fa-brands fa-linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                    <a href="https://www.instagram.com/artf4com/" class="social_button">
                        <i class="fa-brands fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </div>
            </div>

        </div>
    </footer>
</body>



</html>