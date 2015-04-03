<link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>static/js/vendor/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/autocomplete.js"></script>
<link href="<?php echo base_url(); ?>static/css/vendor/typeaheadjs.css" rel="stylesheet" media="screen">

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
        <legend>Insert new request</legend>
        <label for="organisation">Organisation Id: </label>
            <input class="hidden" id="organisartion_id" name="details[organisation_id]" required />
            <input id="organisartion" name="organisation" required />
            <br>
        <label for="asset">Asset: </label>
            <input class="hidden" id="asset_id" name="details[asset_id]" required />
            <input id="asset" name="asset" required />
            <br>
        <label for="priotiy">Priority: </label><input id="priority" name="details[priority]" required /><br>
    </fieldset>
    <input type="submit" name="request" value="Make the Request" />
</form>

<script>
   $('#organisartion').autocomplete(
        '<?php echo base_url(); ?>organisations/list_json',
        'name',
        $('#organisartion_id'),
        'id'
    );
    $('#asset').autocomplete(
         '<?php echo base_url(); ?>assets/list_json',
         'name',
         $('#asset_id'),
         'id'
     );
</script>
