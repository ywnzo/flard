<form id="register-form" class="column" action="index.php?action=register" method="POST" style="display: <?php echo $displayRegister ?>; align-items: center; gap: 16px;">
    <h1>Register</h1>
    <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>">
    <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
    <input type="password" name="password" placeholder="Password" value="<?php echo $password ?>">
    <span class="text-error"> <?php echo $errRegister ?> </span>
    <p class="login-btn auth-link">Already have an account?</p>
    <input style="min-width: 12rem; max-width: 12rem;" type="submit" value="Register" class="btn-main">
</form>
