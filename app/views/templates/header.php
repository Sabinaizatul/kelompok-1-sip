<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['title']; ?> | Perpusku
    </title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= BASE_URL; ?>img/logo.jpg" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    
    <script>
        var BASE_URL = '<?php echo BASE_URL; ?>';
    </script>
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <main>
        <div class="container mt-4">