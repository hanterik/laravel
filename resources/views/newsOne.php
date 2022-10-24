<?php include 'menu.php'; ?>


<a href="<?=route('category').'/'.$news['category_id']?>"><?= $news['category_id'] ?></a>
<h2><?= $news['title'] ?></h2>
<p><?= $news['text'] ?></p>

