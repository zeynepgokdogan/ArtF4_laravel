<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="icon" type="image/png" href="/images/icon.jpg">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="/js/script.js"></script>
</head>

<body>
    <!-- NAVBAR -->
    @include('includes.navbar')


    <!-- OTHERS-->
    <div class="contact_container">
        <div class="contact_1">
            <div class="contact_1_inside">
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
                                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                        required>
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
        </div>

        <div class="contact_2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3185.254529397635!2d37.30331741229203!3d37.02757707206717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531dffd299057e1%3A0x1591f8445948c7bd!2sArtF4%20Teknoloji%20Tasar%C4%B1m%20M%C3%BChendislik%20ve%20Dan%C4%B1%C5%9Fmanl%C4%B1k%20Ltd.%20%C5%9Eti.%20-%20Gaziantep!5e0!3m2!1str!2str!4v1720595881928!5m2!1str!2str"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- FOOTER -->
    @include('includes.footer')

</body>

</html>