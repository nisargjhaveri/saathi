<h2>Sample form</h2>
<form action='' method='POST'>
    Phone number: <input name='phone_no' required/><br>
    Email: <input name='email' /><br>
    Mailing list: <input name='mailing_list' /><br>
    <input type='submit' name='submit'/><br>
</form>
<br>
<?php
if ($success != null) {
    if ($success == true) {
        echo "Submited successfully";
    }
    else {
        echo "Submission failed";
    }
}
?>
