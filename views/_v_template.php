<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!--css-->
	<link rel="stylesheet" href="/css/master.css">
					
	<!-- Controller Specific JS/CSS -->
	<!-- <?php if(isset($client_files_head)) echo $client_files_head; ?>-->
	
</head>

<body id='<?php if(isset($body_id)) echo $body_id; ?>'>

    <nav id='primary_nav'>
    
			<ul>
        		<li id="navhome"><a href='/'>Home</a></li>
        	</ul>

        	<!-- Menu for users who are logged in -->
        	<?php if($user): ?>
			<ul>
            	<li id="navlogout"><a href='/users/logout'>Logout</a></li>
            	<li id="navprofile"><a href='/users/profile'>Profile</a></li>
            	<li id="navadd"><a href='/posts/add'>Add Post</a></li>
            </ul>

        	<!-- Menu options for users who are not logged in -->
        	<?php else: ?>
        	<ul>
            	<li id="signup"><a href='/users/signup'>Sign up</a></li>
            	<li id="login"><a href='/users/login'>Log in</a></li>
            </ul>

        	<?php endif; ?>

    </nav><!-- end primary_nav-->

    <br>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Navigation highlight css 'iamhere' -->
	<script type="text/javascript" src="/js/highlightnavigation.js"> </script>
	</body>
</html>
