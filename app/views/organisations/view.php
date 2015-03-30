<h2>Organisation List</h1>
<?php 
    foreach ($org_list as $list) {
        echo $list['name']."<br>".$list['home_country']."<br>".$list['phone_no']."<br>".$list['email']."<br>";
        echo $list['mailing_list']."<br>".$list['description']."<br>".$list['founded']."<br>";
        echo "<hr>";
    }
?>