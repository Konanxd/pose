<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <link rel="stylesheet" href=" <?php base_url() ?> css/styles.css">

    <?= $this->renderSection('pageStyles') ?>

</head>

<body class="bg-[#f3e6be]">
    <!-- Navbar -->
    <?= view('component/header.php') ?>

    <main role="main" class="container mt-10 mb-10 mx-auto max-w-5xl flex flex-1 flex-col items-center justify-center">
        <?= $this->renderSection('main') ?>
    </main>

    <?= $this->renderSection('pageScripts') ?>
</body>

</html>