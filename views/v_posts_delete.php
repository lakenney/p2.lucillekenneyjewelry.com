<!-- Delete a users post -->

			

<!--
<?php foreach($posts as $where_condition): ?>

	<!--print_r($posts); -->

	<?=$post['content']?>
	
	<form action="/posts/p_delete/<?=$post['post_id']?>" method="post">
		<input type="submit" name="delete" value="X"/>
	</form>
	
	<?=Time::display($post['created'],'Y-m-d G:i')?>
	<?=$post['first_name']?>
	<?=$post['content']?>
		
<?php endforeach; ?>
-->
 
 <!-- 	print_r($posts);
-->
<h2>Are you sure you want to delete this post?</h2>

	<a href='/posts/p_delete/<?=$post['post_id']?>'>
		<button type="button" class='button' id='buttonDelete'>Delete</button>
	</a>

