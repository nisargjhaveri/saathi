<?php
if ($success !== null) {
    if ($success == true) {
        echo "<br/>Submited successfully<br/>";
    }
    else {
        echo "<br/>Submission failed<br/>";
    }
}
?>
<b>Email Example</b>
<form action='' method='POST'>
	Email: <input name='email' /><br>
	Subject: <input name='subject' /><br>
	Body: <input name='body' /><br>
<input type='submit' name='submit'/><br>
</form>

