<h2>Update request</h1>
<?php
echo  "this is the value of updated";
echo $updated;
if ($updated !== null) {
if ($updated > 0) {
echo "Updated successfully";
}
else {
echo "Updated failed";
}
echo "<br><br>";
}
?>
<form action="" method="POST">
<fieldset>
<legend>Updated Details</legend>
<label for="Request_id">Request Id: </label><input id="request_id" name="update_details['request_id']" required /><br>
<label for="Asset_id">Asset Id: </label><input id="asset_id" name="update_details['asset_id']" required /><br>
</fieldset>
<input type="submit" name="update" value="Make the Update" />
</form>

    

