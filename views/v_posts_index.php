<!-- Add an new post -->

	<div class="four columns">
        <?=$moreContent;?>    
    </div>
             
<!-- Users posts I'm following-->

<?php foreach($posts as $post): ?>
	<article>
		<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
		
			<p><?=$post['content']?></p>
			
			<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        	<?=Time::display($post['created'])?>
    		</time>
	</article>
<?php endforeach; ?>
