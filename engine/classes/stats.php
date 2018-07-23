<?PHP
	// get user stats, id of user, id of game, id of platform
	// include("engine/classes/stats.php");
	// $stats = new FDK_Stats;
	// var_dump($stats->getStats(53, 1, 1));
	class FDK_Stats {
		public $uid;
		public $gid;
		public $pid;
		public function getStats($uid, $gid, $pid) {
			$this->uid = $uid;
			$this->gid = $gid;
			$this->pid = $pid;
			include("engine/database.php");
			$stmt = $pdo->prepare("SELECT id FROM game_tags WHERE uid = ? AND gid = ? AND pid = ?");
			$stmt->execute([$this->uid, $this->gid, $this->pid]);
			$row = $stmt->fetch();
			$sql = "SELECT * FROM ";
			if ($this->gid == 1) {
				$sql .= "stats_fortnite";
			}
			$sql .= " WHERE gid = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$row['id']]);
			return $stmt->fetch();
		}
	}
	$FDKSTATS = true;
?>