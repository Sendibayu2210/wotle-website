<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <script src="/vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome612/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
    <?= $this->renderSection('content'); ?>

    <script src="/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/fontawesome612/js/all.min.js"></script>
</body>

</html>