<h2>Add a new camp</h1>
<?php

if ($added !== null) {
    if ($added == true) {
        echo "Added successfully";
    }
    else {
        echo "Submission failed";
    }
    echo "<br><br>";
}
?>
<form action="" method="POST">
    
        <legend>Basic details about the Camp</legend>
        <label for="name">Name: </label><input id="name" name="name" required /><br>
        <label for="organisation_id">Organisation: </label><input id="organisation_id" name="organisation_id" required /><br/>
          <!--  <select id="organisation" name="camp[organisation]" required>
                <option value="" disabled selected>Select Organisation</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                <option value="O">Other</option>
            </select><br>-->
        <label for="camp_head">Camp head: <input id="camp_head" name="camp_head" required /></label><br/>
            <!--<select id="camp_head" name="camp[camp_head]" required>
                <option value="" disabled selected>Select Head</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                <option value="O">Other</option>
            </select><br>-->
        <label for="population">Population: </label><input id="population" type="text" name="population" /><br>
        <label for="voluteers">Volunteers: </label><input id="volunteers" type="text" name="volunteers" /><br>
        <label for="status">Status: </label><input id="stauts" type="text" name="status" /><br>
        <label for="contact_id">Contact_Id: </label><input id="contact_id" type="text" name="contact_id" /><br>
    <input type="submit" name="add_new" value="Add Camp" />
    
</form>
