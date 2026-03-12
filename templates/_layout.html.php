<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'NO TITLE' ?> - Northwind</title>
</head>
<body>
    <?= $content ?? 'No Content: $content is not defined' ?>
    <div class="random-content">
        <h1>Random content for fun!</h1>
        <p>I have no idea why this content is here... it's totally random. 🤔</p>

    </div>
</body>
</html>