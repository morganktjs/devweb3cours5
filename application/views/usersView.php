<?php
    echo '<table class="table"><tr><th scope="col"><b>First Name<b/><th/><th scope="col"><b>Last Name<b/><th/><tr/>';
    foreach($users as $user)
    {
        echo "<tr><td>".htmlspecialchars($user->get_first_name())."<td/><td>".htmlspecialchars($user->get_last_name())."<td/> <td> <button type=\"button\" class=\"btn btn-danger\">Supprimer</button></td><tr/>";
    }
    echo "<table/>"
?>