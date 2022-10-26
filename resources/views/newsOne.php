<?php include 'menu.php'; ?>

<br>
<a href="<?=route('categoryNews',['id' => $news['category_id']])?>">Категория: <?= $news['category_id'] ?></a>
<h2><?= $news['title'] ?></h2>
<p><?= $news['text'] ?></p>

