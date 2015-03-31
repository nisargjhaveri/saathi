<h2>Asset form</h2>
<form action='' method='POST'>
    Asset Name: <input name='name' required/><br>
    Description: <input name='description' /><br>
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
