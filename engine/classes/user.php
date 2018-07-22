<?PHP
	// get user info, 0 for all, else id of user
	// include("engine/classes/user.php");
	// $user = new FDK_User;
	// var_dump($user->getUser(0));
	class FDK_User {
		public $id;
		public function getUser($id = 0) {
			$this->id = $id;
			include("engine/database.php");
			$sql = "SELECT * FROM users";
			if ($this->id != 0) {
				$sql .= " WHERE id = ?";
			}
			$stmt = $pdo->prepare($sql);
			if ($this->id != 0) {
				$stmt->execute([$this->id]);
			} else {
				$stmt->execute();
			}
			return $stmt->fetchAll();
		}
	}
?>