<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo/logo_wotle.png" />

    <script src="/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/custom_vendor/fontawesome612/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script src="/js/wotle.js"></script>
    <script src="/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/custom_vendor/fontawesome612/js/all.min.js"></script>
</body>

</html>