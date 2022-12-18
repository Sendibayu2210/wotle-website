<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/wotle_assets/img/logo/logo_wotle.png" />
    <script src="/wotle_assets/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/wotle_assets/custom_vendor/bootstrap5/css/bootstrap.min.css">    
    <link rel="stylesheet" href="/wotle_assets/css/flickity.min.css">
    <script src="/wotle_assets/js/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="wotle_assets/css/style.css">
</head>

<body>
    

    <?= $this->renderSection('content'); ?>    
    
    <script src="/wotle_assets/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/wotle_assets/custom_vendor/fontawesome612/js/all.min.js"></script>
    <script src="/wotle_assets/js/driver.js"></script>
    
</body>

</html>