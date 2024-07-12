<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projelerimiz</title>
    <link rel="icon" type="image/png" href="/images/icon.jpg">
    <link href="/css/styles.css" rel="stylesheet">
    <script src="/js/script.js"></script>
</head>

<body>
    <!-- NAVBAR -->
    @include('includes.navbar')

    <!-- CONTENT -->
    <div class="projects_container">
        <h4>Projelerimiz</h4>
        <h2>Tamamlanmış ürünlerimiz ve devam eden ar-ge projelerimiz</h2>

        <div class="projects_1">
            <div class="projects_inside"> <img src="/images/project_1.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/project_2.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/project_3.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/project_4.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/project_5.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/project_6.png" alt=""></div>
        </div>

        <h4>Referanslarımız</h4>
        <div class="projects_2">
            <div class="projects_inside"> <img src="/images/referans_1.jpg" alt=""></div>
            <div class="projects_inside"> <img src="/images/referans_2.jpg" alt=""></div>
            <div class="projects_inside"> <img src="/images/referans_3.jpg" alt=""></div>
            <div class="projects_inside"> <img src="/images/referans_4.jpg" alt=""></div>
            <div class="projects_inside"> <img src="/images/referans_5.jpg" alt=""></div>
            <div class="projects_inside"> <img src="/images/referans_6.jpg" alt=""></div>
        </div>

        <h4>Çözüm Ortaklarımız</h4>
        <div class="projects_3">
            <div class="projects_inside"> <img src="/images/ortak_1.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/ortak_2.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/ortak_3.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/ortak_4.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/ortak_5.png" alt=""></div>
            <div class="projects_inside"> <img src="/images/ortak_6.png" alt=""></div>
        </div>
    </div>

    <!-- FOOTER -->
    @include('includes.footer')

</body>


</html>