<h2>Create Organisation</h1>
<?php
if ($created !== null) {
    if ($created == true) {
        echo "New Organisation Created";
    }
    else {
        echo "Organisation Creation failed";
    }
    echo "<br><br>";
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Organisation Details</legend>
        <label for="name">Name of Organisation: </label><input id="name" name="org[name]" required /><br>
        <label for="home">Home Country: </label><input id="home" name="org[home]" required /><br>
        <label for="phone_no">Phone number: </label><input id="phone_no" name="contact[phone_no]" /><br>
        <label for="email">Email: </label><input id="email" type="email" name="contact[email]" /><br>
        <label for="mailing_list">Mailing list: </label><input id="mailing_list" type="email" name="contact[mailing_list]" /><br>
        <label for="desc">Description: </label><br>
            <textarea id="desc" name="org[desc]"></textarea><br>
        <label for="founded">Founded: </label><input id="founded" name="org[founded]" required /><br>
        <input type="submit" name="submit" value="Create Organisation" />
    </fieldset>
</form>
