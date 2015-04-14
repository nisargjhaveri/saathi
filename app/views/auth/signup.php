<?php
if (!empty($error)) {
    echo $error;
}
?>
<form action="" method="post">
    Username: <input name="username" required /><br>
    Password: <input type="password" name="password" required /><br>
    Password: <input type="password" name="conf_password" required /><br>
    <input type="submit" name="signup" value="Register" />
</form>
