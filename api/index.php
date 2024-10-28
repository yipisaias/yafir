<!DOCTYPE html>
<html lang="pt-BR" style="height: 100%;">
<head>
    <?php
        $site = isset($_GET['site']) ? $_GET['site'] : '';
        $iconUrl = "https://www.google.com/s2/favicons?domain_url=" . urlencode($site);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yafir - Yet Another Favicon Relayer</title>

    <link rel="canonical" href="https://yafir.vercel.app">
    <link rel="icon" href="<?= $iconUrl ?>">
    <meta property="og:site_name" content="Yafir">
    <meta property="og:title" content="Yafir - Yet Another Favicon Relayer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yafir.vercel.app">
</head>
<body style="margin: 0px; height: 100%; display: flex; justify-content: center; align-items: center;">
    <img src="<?= $iconUrl ?>" alt="loading..." style="margin: auto;">
</body>
</html>
