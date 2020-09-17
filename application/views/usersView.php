<table >
    <tr>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Ville</th>
        <th></th>
    </tr>
<?php

    foreach($users as $user){
        echo '<tr id="user'.$user->get_id().'">';
        echo '<td>';
        echo ('<p>'. $user->get_first_name() .'</p>');
        echo '</td>';
        echo '<td>';
        echo ('<p>'. $user->get_last_name() .'</p>');
        echo '</td>';
        echo '<td>';
        echo ('<p>'. $user->get_city() .'</p>');
        echo '</td>';
        echo '<td>';
         echo ('exercice cours 3');
        echo '</td>';
        echo '</tr>';
    }   
?>
</table>