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
    @include('includes.navbar')

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
    @include('includes.footer')

</body>



</html>