<h2>Updated a Request</h1>
<?php
if ($updated !== null) {
    if ($updated>0) {
        echo "Request Updated Successfully";
    }
    else {
        echo "Request Updated Fails";
    }
    echo "<br><br>";
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Update Request details</legend>
        <label for="request_id">Request Id: </label><input id="request_id" name="update_details[request_id]" required /><br>
	<label for="asset_id">Asset ID: </label><input id="asset_id" name="update_details[asset_id]" required /><br>
    </fieldset>
    <input type="submit" name="update" value="update" />
</form>
