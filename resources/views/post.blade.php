<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="app.css">
<script src="app.js"></script>

<body>
  <article>
    <h1><?= $post->title; ?></h1>
    <div><?= $post->body; ?></div>
  </article>

  <a href="/">Go Home</a>
</body>