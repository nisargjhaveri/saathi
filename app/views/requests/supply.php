<h2>Supply an asset request</h1>
<?php
if ($supplied !== null) {
if ($supplied > 0) {
echo "Supplied successfully";
}
else {
echo "Supply failed";
}
echo "<br><br>";
}
?>
<form action="" method="POST">
<fieldset>
<legend>Supply Details</legend>
<label for="Supplier_id">Supplier Id: </label><input id="supplier_id" name="supply_details[supplier_id]" required /><br>
<label for="Request_id">Request Id: </label><input id="asset_id" name="supply_details[request_id]" required /><br>
</fieldset>
<input type="submit" name="supply" value="Make the Request" />
</form>
