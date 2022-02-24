<table border="1">
    <tr>
        <td> Pre Name </td>
        <td> Name </td>
        <td> Surname </td>
        <td> Date of Birth</td>
        <td> Phone </td>
        <td> E-mail </td>
    </tr>

    <?php foreach($userList as $u){
        echo "<tr> 
        <td> $u->id_name</td>
        <td> $u->uname</td>
        <td> $u->usurname</td>
        <td> $u->udob</td>
        <td> $u->uphone</td>
        <td> $u->umail</td>";
    }
    echo "</table>"
?>