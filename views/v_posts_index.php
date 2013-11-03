<!-- Add an new post -->

	<div>
        <?=$moreContent;?>    
    </div>
             
<article>
	<!-- Displays a message to the logged in user -->
	<h2>Hey <?=$user->first_name?>, Here are the users you're following:</h2>
</article>

	<!-- Users posts I'm following-->
	<?php foreach($posts as $post): ?>
		<article>
			<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
		
				<!-- Display posted content -->
				<p><?=$post['content']?></p>

				<!-- Display website -->
				<p><?=$post['website']?></p>

				<p>
					<!-- Display time of creation -->
					<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        				<?=Time::display($post['created'])?>
    				</time>
    			</p>
    			    			
				<!-- Displays delete button on logged in user's posts -->
				<?php if($post['user_id'] == $user->user_id): ?>
					<a href='/posts/p_delete/<?=$post['post_id']?>'>
					<button type="button" class='button' id='buttonDelete'>Delete Post</button></a>
				<?php else: ?>
				<?php endif; ?>
    			
		</article>
	<?php endforeach; ?>

<!-- 
	delete links that shows up on the user's posts
 	take them to a single post view with the option to confirm delete a single post
 -->
