<?PHP
	// get gametag
	class FDK_Gametag {
		public $uid;
		public $gid;
		public $pid;
		// 0 for all, else id of user/game/platform
		// include("engine/classes/gametag.php");
		// $gametag = new FDK_Gametag;
		// $gametag = (object) json_decode(json_encode($gametag->getGametag(0, 0, 0)));
		// var_dump($gametag);
		public function getGametag($uid = 0, $gid = 0, $pid = 0) {
			$this->uid = $uid;
			$this->gid = $gid;
			$this->pid = $pid;
			include("engine/database.php");
			$sql = "SELECT * FROM game_tags";
			if ($this->uid != 0 || $this->gid != 0 || $this->pid != 0) {
				$sql .= " WHERE";
			}
			if ($this->uid != 0) {
				$sql .= " uid = ? AND";
			}
			if ($this->gid != 0) {
				$sql .= " gid = ? AND";
			}
			if ($this->pid != 0) {
				$sql .= " pid = ? AND";
			}
			if (substr($sql, -4) == " AND") {
				$sql = substr($sql, 0, -4);
			}
			$stmt = $pdo->prepare($sql);
			if ($this->uid != 0 && $this->gid != 0 && $this->pid != 0) {
				$stmt->execute([$this->uid, $this->gid, $this->pid]);
			} elseif ($this->uid != 0 && $this->gid != 0 && $this->pid == 0) {
				$stmt->execute([$this->uid, $this->gid]);
			} elseif ($this->uid != 0 && $this->gid == 0 && $this->pid != 0) {
				$stmt->execute([$this->uid, $this->pid]);
			} elseif ($this->uid == 0 && $this->gid != 0 && $this->pid != 0) {
				$stmt->execute([$this->gid, $this->pid]);
			} elseif ($this->uid != 0 && $this->gid == 0 && $this->pid == 0) {
				$stmt->execute([$this->uid]);
			} elseif ($this->uid == 0 && $this->gid != 0 && $this->pid == 0) {
				$stmt->execute([$this->gid]);
			} elseif ($this->uid == 0 && $this->gid == 0 && $this->pid != 0) {
				$stmt->execute([$this->pid]);
			} else {
				$stmt->execute();
			}
			return $stmt->fetchAll();
		}
	}
	$FDKGAMETAG = true;
?>