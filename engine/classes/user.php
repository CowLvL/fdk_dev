<?PHP
	// get user info
	class FDK_User {
		public $id;
		// 0 for all, else id or user_id of user
		// include("engine/classes/user.php");
		// $user = new FDK_User;
		// $user = json_decode(json_encode($user->getUser(0)));
		// var_dump($user);
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