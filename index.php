<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 14/06/2018
 * Time: 14:21
 */

require_once "connexion.php";
$sql = "SELECT 
  id, 
  posted_at,
  message
FROM
  message
;";
$stmt = $conn->prepare($sql);
$stmt->execute();

?>

<a href="admin/index.php">Wanna see administration?</a>

<form action="doadd.php" method="post">
    <label for="date">Date :</label><input type="datetime-local" name="posted_at"><br>
    <label for="message">Message :</label><input type="text" name="message"><br>
    <input type="submit" value="Envoyer"><br>
</form>

<table>
    <tr>
        <th>id</th>
        <th>Date</th>
        <th>message</th>
    </tr>

<?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["posted_at"]?></a></td>
        <td><?php echo $row["message"]?></td>
    </tr>
<?php endwhile;?>

</table>

