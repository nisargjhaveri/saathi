<h2>Supply a Request</h1>
<?php
if ($supplied !== null) {
    if ($supplied == true) {
        echo "Request Supplied Successfully";
    }
    else {
        echo "Request Supply Fails";
    }
    echo "<br><br>";
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Supply Request details</legend>
        <label for="request_id">Request Id: </label><input id="request_id" name="supply_details[request_id]" required /><br>
	<label for="supplier_id">Supplier ID: </label><input id="supplier_id" name="supply_details[supplier_id]" required /><br>
    </fieldset>
    <input type="submit" name="supply" value="supply" />
</form>
