<!-- Add view for new post -->

	<div>
        <?=$addPost;?>    
    </div>
    
<!-- Add view for follow or unfollow users -->

    <div>

    </div>
    
<!-- Users being followed -->
             
<article>
	<!-- Displays a message to the logged in user -->
	<h2>Hey <?=$user->first_name?>, </h2>
		<p>
			Please go to the 'Users' tab to follow other members so you can see their posts.
			It will be moved here eventually. 
		<p>
		<p>
			Thank you,<br>
			Management
		</p>
</article>

	<!-- Users posts I'm following-->
	<?php foreach($posts as $post): ?>
		<article class='followed cf'>
		
			<!-- Display posted content -->
			<p class='content'><?=$post['content']?></p>
			
			<div id='talker'>
				<ul>
					<li class='name'>
						<?=$post['first_name']?> <?=$post['last_name']?>
					</li>
					<li class='website'>
						<!-- Display website -->
						<a href='<?=$post['website']?>'><?=$post['website']?></a>
						
					</li>
					<li>
						<!-- Display time of creation -->
						<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        					<?=Time::display($post['created'])?>
    					</time>    			
    				<li>
    			</ul>	
						<!-- Displays delete button on logged in user's posts -->
						<?php 
						if($post['user_id'] == $user->user_id): ?>
							<a href='/posts/delete/<?=$post['post_id']?>'>
							<button type="button" class='button cf' id='buttonDelete'>Delete Post</button></a>
						<?php else: ?>
						<?php endif; ?>
					
				
    		</div><!--end talker_creds-->
		</article>
	<?php endforeach; ?>

<!-- 
	delete links that shows up on the user's posts
 	take them to a single post view with the option to confirm delete a single post
 -->
