<!-- Delete a users post -->

 <article>
	<p>
		Are you sure you want to delete this post? 
		
		<button type="button" class="confirmDelete cf">
			<a href="/posts">No</a>
		</button>
		
		<button type="button" class="confirmDelete cf" id="confirmDelete">
			<a href='/posts/p_delete/<?=$post_id?>'>Yes</a>
		</button>
	</p>
</article>
	
	
<!-- Save this code -->

<!--
		<form method='POST' action='/posts/p_delete'>
			<input type="hidden" name='post_id' value='<?=$post['post_id']?>'>
			<input type='submit' value='confirm deletion'>
			** NOTE: this cannot be undone! **
		</form>
-->

<!--
		<?php foreach($posts as $where_condition): ?>

			<!--print_r($posts); -->

			<?=$post['content']?>
	
			<form action="/posts/p_delete/<?=$post['post_id']?>" method="post">
				<input type="submit" name="delete" value="<?=$post['post_id']?>"/>
			</form>
	
			<?=Time::display($post['created'],'Y-m-d G:i')?>
			<?=$post['first_name']?>
			<?=$post['content']?>
		
		<?php endforeach; ?>
-->