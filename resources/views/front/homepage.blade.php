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
    <link href="/css/styles.css" rel="stylesheet">
    <script src="/js/script.js"></script>
</head>


<body>
    <!-- NAVBAR -->
    @include('includes.navbar')

    <!-- OTHERS-->
    <div class="homepage_1"></div>

    <div class="homepage_container">
        <div class="homepage_1_inside">
            <h1>Hayallerinize birkaç ufak dokunuş.</h1>
            <h2>Fikirlerinizi önemsiyoruz ve bir an önce hayata geçirmeniz için gerekli tüm profesyonel desteği
                sağlıyoruz</h2>

            <button id="button_hp1" onclick="window.location='{{ route('about.us') }}'">HAKKIMIZDA</button>
            <button id="button_hp2" onclick="window.location='{{ route('start.project') }}'">PROJE BAŞLAT</button>
        </div>

        <div id="homepage_2">
            <div class="homepage_2_inside">
                <h3>Hakkımızda</h3>
                <h2>ArtF4; farklı meslek dallarından alanında yetkin, genç ve dinamik girişimcilerin oluşturduğu bir
                    proje
                    atölyesidir. Kasım 2017 yılında Gaziantep Teknopark'ta kurulan atölyemiz; yazılım, tasarım ve
                    elektronik
                    alanlarında
                    yaratıcı ve akılcı çözümler üretiyor.</h2>
            </div>
        </div>

        <h4>Neler Yapıyoruz? </h4>
        <div class="homepage_3">
            <div class="services">
                <div class="services_inside">
                    <div class="icon-container">
                        <img src="/images/yazilim.svg" alt="Yazılım İkon">
                    </div>
                    <h4>YAZILIM ATÖLYESİ</h4>
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
    @include('includes.footer')

</body>

</html>