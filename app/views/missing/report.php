<h2>Report a missing person</h1>
<?php
if ($reported !== null) {
    if ($reported == true) {
        echo "Reported successfully";
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
        <label for="fname">First name: </label><input id="fname" name="person[fname]" required /><br>
        <label for="lname">Last name: </label><input id="lname" name="person[lname]" required /><br>
        <label for="gender">Gender: </label>
            <select id="gender" name="person[gender]" required>
                <option value="" disabled selected>Select gender</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                <option value="O">Other</option>
            </select><br>
        <label for="dob">Date of birth: </label><input id="dob" type="date" name="person[dob]" /><br>
    </fieldset>
    <fieldset>
        <legend>Contact details of missing person</legend>
        <label for="phone_no">Phone number: </label><input id="phone_no" name="person_contact[phone_no]" /><br>
        <label for="email">Email: </label><input id="email" type="email" name="person_contact[email]" /><br>
        <label for="mailing_list">Mailing list: </label><input id="mailing_list" type="email" name="person_contact[mailing_list]" /><br>
    </fieldset>
    <fieldset>
        <legend>Additional information about missing person</legend>
        <label for="body_marks">Body marks: </label><br>
            <textarea id="body_marks" name="person_detail[body_marks]"></textarea><br>
        <label for="height">Height: </label><input id="height" name="person_detail[height]" /><br>
        <label for="weight">Weight: </label><input id="weight" name="person_detail[weight]" /><br>
        <label for="hair">Hair: </label><input id="hair" name="person_detail[hair]" /><br>
        <label for="eye_color">Eye color: </label><input id="eye_color" name="person_detail[eye_color]" /><br>
        <label for="last_seen">Last seen (When, where, condition): </label><br>
            <textarea id="last_seen" name="person_detail[last_seen]"></textarea><br>
    </fieldset>
    <fieldset>
        <legend>Whom to contact?</legend>
        <label for="w_phone_no">Phone number: </label><input id="w_phone_no" name="contact_whom[phone_no]" required /><br>
        <label for="w_email">Email: </label><input id="w_email" type="email" name="contact_whom[email]" required /><br>
        <label for="w_mailing_list">Mailing list: </label><input id="w_mailing_list" type="email" name="contact_whom[mailing_list]" /><br>
    </fieldset>
    <input type="submit" name="report" value="Report missing" />
</form>
