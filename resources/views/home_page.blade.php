<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- mobile uyumlu yazdığın cssleri uyulamk için gerekli -->
    <title>ArtF4 | Proje Atölyesi - Teknoloji Tasarım Mhendislik ve Danışmanlık</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-yk+gzNp5/7la4fB5vXyGR+L2tPfa/MzD9jtVqFBl/JY9Pdo4xg9ghmhoEorx6zz2ejOBpFdKPrf+1ak7um8sxQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="/images/icon.jpg">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../footer.html">
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
    <div class="homepage_1"></div>

    <div class="homepage_container">
        <div class="homepage_1_inside">
            <h1>Hayallerinize birkaç ufak dokunuş.</h1>
            <h2>Fikirlerinizi önemsiyoruz ve bir an önce hayata geçirmeniz için gerekli tüm profesyonel desteği
                sağlıyoruz</h2>

            <button id="button_hp1">HAKKIMIZDA</button>
            <button id="button_hp2">PROJE BAŞLAT</button>
        </div>

        <div id="homepage_2">
            <div class="homepage_2_inside">
                <h3>Hakkımızda</h3>
                <h2>ArtF4; farklı meslek dallarından alanında yetkin, genç ve dinamik girişimcilerin oluşturduğu bir
                    proje
                    atölyesidir. Kasım 2017 yılında Gaziantep Teknopark'ta kurulan atölyemiz; yazılım, tasarım ve
                    elektronik
                    alanlarında
                    yaratıcı ve akılcı çözümler üretiyor.</h4>
            </div>
        </div>

        <h4>Neler Yapıyoruz? </h3>
            <div class="homepage_3">
                <div class="services">
                    <div class="services_inside">
                        <div class="icon-container">
                            <img src="/images/yazilim.svg" alt="Yazılım İkon">
                        </div>
                        <h4>YAZILIM ATÖLYESİ</h1>
                            <h2>işi ve kurumlara özel yazılımlar, sektörel otomasyon çözümleri, B2B,</h2>
                    </div>

                    <div class="services_inside">
                        <div class="icon-container">
                            <img src="/images/tasarim.svg">
                        </div>
                        <h4>TASARIM ATÖLYESİ</h1>
                            <h2>Profesyonel ekibimizle; mimari, iç mimari, endüstriyel ürün, kurumsal kimlik,</h2>
                    </div>

                    <div class="services_inside">
                        <div class="icon-container">
                            <img src="/images/robotik.svg">
                        </div>
                        <h4>ELEKTRONİK ATÖLYESİ</h1>
                            <h2>Endüstri 4.0 ve nesnelerin interneti alanlarında ar-ge projeleri yürütüyor,</h2>
                    </div>

                    <div class="services_inside">
                        <div class="icon-container">
                            <img src="/images/idea.svg">
                        </div>
                        <h4>FİKİR ATÖLYESİ</h1>
                            <h2>Proje ve girişimcilik fikirlerinizi uzman ekibimizle birlikte geliştirerek hayata
                                geçirmeniz
                                için</h2>
                    </div>
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
