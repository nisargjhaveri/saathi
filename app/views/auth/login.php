<?php
if (!empty($error)) {
    echo $error;
}
?>
<form action="" method="post">
    Username: <input name="username" required /><br>
    Password: <input type="password" name="password" required /><br>
    <input type="submit" name="login" value="Log in" />
</form>
