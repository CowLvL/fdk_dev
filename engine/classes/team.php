<?PHP
	// get team info, 0 for all, else id of team
	// include("engine/classes/team.php");
	// $team = new FDK_Team;
	// var_dump($team->getTeam(0));
	class FDK_Team {
		public $id;
		public function getTeam($id = 0) {
			$this->id = $id;
			include("engine/database.php");
			$sql = "SELECT * FROM teams";
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