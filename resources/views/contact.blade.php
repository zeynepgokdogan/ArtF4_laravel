<!DOCTYPE html>
<html lang="tr"><html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
    <div class="contact_container">

        <div class="contact_1">
            <div>
                <h1>Bir fikriniz mi var?</h1>
                <h1>Bugün başlayın.</h1>
                <h2>Fikirlerinizi önemsiyoruz ve bir an önce hayata geçirmeniz için gerekli tüm profesyonel desteği
                    sağlıyoruz.</h2>
            </div>
            <div class="">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first-name">Adınız-Soyadınız</label>
                                <input type="text" id="first-name" name="first-name" required autocomplete="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefon Numaranız</label>
                                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">E-posta Adresiniz</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mesajınız</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Gönder</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact_2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3185.254529397635!2d37.30331741229203!3d37.02757707206717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531dffd299057e1%3A0x1591f8445948c7bd!2sArtF4%20Teknoloji%20Tasar%C4%B1m%20M%C3%BChendislik%20ve%20Dan%C4%B1%C5%9Fmanl%C4%B1k%20Ltd.%20%C5%9Eti.%20-%20Gaziantep!5e0!3m2!1str!2str!4v1720595881928!5m2!1str!2str"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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