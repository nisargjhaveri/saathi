<?php
if ( $results === false ) {
    echo "Some error occured.";
}
else if ( count($results) == 0 ) {
    echo "No matches found. Please try again with refined parameters.";
}
else {
    foreach ( $results as $person ){
        echo $person['fname'] . '<br>';
        echo $person['lname'] . '<br>';
        echo $person['gender'] . '<br>';
        echo $person['dob'] . '<br>';
        echo $person['phone_no'] . '<br>';
        echo $person['email'] . '<br>';
        echo $person['mailing_list'] . '<br>';
        echo $person['body_marks'] . '<br>';
        echo $person['height'] . '<br>';
        echo $person['weight'] . '<br>';
        echo $person['hair'] . '<br>';
        echo $person['eye_color'] . '<br>';
        echo $person['last_seen'] . '<br>';
        echo $person['status'] . '<br>';
        echo "------------------------<br>";
    }
}
