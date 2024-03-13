<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Posts</title>
</head>

<body>
    <main class="container">
        <?php foreach($posts as $post): ?>
        <div class="post-item">
            <a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a>
            <p>
                <?= $post->excerpt ?>
            </p>
        </div>
        <?php endforeach; ?>
    </main>
</body>

</html>
