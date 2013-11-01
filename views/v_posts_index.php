<!-- Add an new post -->

	<div>
        <?=$moreContent;?>    
    </div>
             
<!-- Users posts I'm following-->

<article>
	<h2>Hey <?=$user->first_name?>, Here are the users you're following:</h2>
</article>

	<?php foreach($posts as $post): ?>
		<article>
			<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
		
				<p><?=$post['content']?></p>
			
				<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        		<?=Time::display($post['created'])?>
    			</time>
		</article>
	<?php endforeach; ?>

<!-- 
	delete links that shows up on the user's posts
 	take them to a single post view with the option to confirm delete a single post
 -->