<!DOCTYPE html>
<html lang="pt-BR" style="height: 100%;">
<head>
    <?php
        $site = isset($_GET['site']) ? $_GET['site'] : '';
        $iconUrl = "https://www.google.com/s2/favicons?domain_url=" . urlencode($site);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yafir</title>
    <link rel="icon" href="<?= $iconUrl; ?>">
</head>
<body style="margin: 0px; height: 100%; display: flex; justify-content: center; align-items: center;">
    <img src="<?= $iconUrl; ?>" alt="loading..." style="margin: auto;">
</body>
</html>
