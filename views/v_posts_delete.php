<!-- <?php foreach($posts as $post): ?>
	Does this contain all my data?
	print_r($posts);
	
	<form action="/posts/p_delete/<?=$post['post_id']?>" method="post">
		<input type="submit" name="delete" value="..."/>
	</form>
	<?=Time::display($post['created'])?>							
				
	<?=$post['first_name']?>
	<?=$post['content']?>
		
<?php endforeach; ?> -->

<form method='post' action='/posts/p_delete'>
	
	
	<input type="submit" name="delete" />
	
</form>