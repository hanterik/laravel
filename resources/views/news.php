<?php include_once 'menu.php';?>

<h1>Новости</h1>
<div>
    <?php foreach ($news as $item): ?>
        <a href="<?=route('newsOne', ['id' => $item['id']])?>"><?=$item['title'];?></a>
    <?php endforeach;?>
</div>
