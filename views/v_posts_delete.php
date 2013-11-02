<!-- Delete a users post -->

			


<?php foreach($posts as $post): ?>

	<!--print_r($posts); -->

	<?=$post['content']?>
	
	<form action="/posts/p_delete/<?=$post['post_id']?>" method="post">
		<input type="submit" name="delete" value="X"/>
	</form>
	
	<?=Time::display($post['created'],'Y-m-d G:i')?>
	<?=$post['first_name']?>
	<?=$post['content']?>
		
<?php endforeach; ?>

 
 <!-- 	print_r($posts);
-->