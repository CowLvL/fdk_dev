<?PHP
	include("engine/database.php");
	$stmt = $pdo->prepare("SELECT * FROM settings");
	$stmt->execute();
	while ($row = $stmt->fetch()) {
		$settings[$row['name']] = $row['content'];
	}
	$stmt = null;
?>