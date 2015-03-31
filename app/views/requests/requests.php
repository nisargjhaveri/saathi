<h2>Make an asset request</h1>
<?php
if ($requested !== null) {
    if ($requested == true) {
        echo "Requested successfully";
    }
    else {
        echo "Submission failed";
    }
    echo "<br><br>";
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Common details about the person</legend>
        <label for="organisation_id">Organisation Id: </label><input id="organisartion_id" name="details[organisation_id]" required /><br>
        <label for="asset_id">Asset: </label><input id="asset_id" name="details[asset_id]" required /><br>
        <label for="date">Date : </label><input id="date" type="date" name="details[date]" /><br>
	<label for="priotiy">Asset: </label><input id="priority" name="details[priority]" required /><br>
    </fieldset>
    <input type="submit" name="request" value="Make the Request" />
</form>
