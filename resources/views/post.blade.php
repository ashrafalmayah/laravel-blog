<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>Blog | <?= $post->title ?></title>
</head>

<body>
    <main class="container">
        <article class="post-item">
            <h1><?= $post->title ?></h1>
            <?= $post->body ?>
        </article>
        <a href="/">Go Back</a>
    </main>
</body>

</html>
