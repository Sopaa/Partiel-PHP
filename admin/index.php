<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 14/06/2018
 * Time: 15:32
 */

require_once "../connexion.php";
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
			<td><a href="dodelete.php?id=<?php echo $row["id"]?>">SUPRESSSIOOOOOON</a></td>
		</tr>
	<?php endwhile;?>

</table>


<a href="../index.php">Retour a la hompage</a>
