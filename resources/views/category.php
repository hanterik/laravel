<?php include 'menu.php';?>

<h1>Новости</h1>
<div>
    <?php foreach ($category as $item): ?>

       <li><a href="<?=route('categoryNews', ['id' => $item['id']])?>"><?=$item['name'];?></a></li>
    <?php endforeach;?>
</div>
