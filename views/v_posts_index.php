<!-- Add an new post -->
<div>
    <?=$moreContent;?>    
</div>
<br> <br>

<!-- Users posts I'm following-->

<br> <br>

<?php foreach($posts as $post): ?>

<article>
	<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
	
	<p><?=$post['content']?></p>
	
	<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>
