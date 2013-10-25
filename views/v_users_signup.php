<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br><br>
    
    <?php if(empty($error)): ?>
        <div class='error'>
            Fill in your first name.
        </div>
        
        <br>
        
    <?php endif; ?>
    
    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>
    
    <?php if(empty($error)): ?>
        <div class='error'>
            Fill in your last name.
        </div>
        
        <br>
        
    <?php endif; ?>
    
    Email<br>
    <input type='text' name='email'>
    <br><br>
    
    <?php if(isset($error)): ?>
        <div class='error'>
            Signup failed. You already have an account.
        </div>
        
        <br>
        
    <?php endif; ?>

    Password<br>
    <input type='password' name='password'>
    <br><br>
    
    <?php if(empty($error)): ?>
        <div class='error'>
            Fill in your password name.
        </div>
        
        <br>
        
    <?php endif; ?>
    
    <input type='submit' value='Sign up'>

</form>

