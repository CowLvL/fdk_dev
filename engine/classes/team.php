<?PHP
	// get team info
	class FDK_Team {
		public $id;
		// 0 for all, else id of team
		// include("engine/classes/team.php");
		// $team = new FDK_Team;
		// $team = (object) json_decode(json_encode($team->getTeam(0)));
		// var_dump($team);
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
		// include("engine/classes/team.php");
		// $team = new FDK_Team;
		// $teamMembers = (object) json_decode(json_encode($team->getTeamMembers(1)));
		// var_dump($teamMembers);
		public function getTeamMembers($id) {
			$this->id = $id;
			include("engine/database.php");
			$sql = "SELECT * FROM team_group_members";
			if ($this->id != 0) {
				$sql .= " WHERE tid = ?";
			}
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$this->id]);
			$teamMembers = array();
			while ($row = $stmt->fetch()) {
				$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
				$stmt->execute([$row['uid']]);
				array_push($teamMembers, $stmt->fetch());
			}
			return $teamMembers;
		}
	}
	$FDKTEAM = true;
?>