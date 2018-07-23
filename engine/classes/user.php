<?PHP
	// get user info, 0 for all, else id or user_id of user
	// include("engine/classes/user.php");
	// $user = new FDK_User;
	// var_dump($user->getUser(0));
	class FDK_User {
		public $id;
		public function getUser($id = 0) {
			$this->id = $id;
			include("engine/database.php");
			$sql = "SELECT * FROM users";
			if (is_numeric($this->id)) {
				if ($this->id != 0) {
					$sql .= " WHERE id = ?";
				}
			} else {
				$sql .= " WHERE user_id = ?";
			}
			$stmt = $pdo->prepare($sql);
			if ($this->id != 0 || !is_numeric($this->id)) {
				$stmt->execute([$this->id]);
			} else {
				$stmt->execute();
			}
			return $stmt->fetchAll();
		}
	}
	$FDKUSER = true;
?>