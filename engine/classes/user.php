<?PHP
	// get user info
	class FDK_User {
		// 0 for all, else id or user_id of user
		// if (!isset($FDKUSER)) {
		// 	require("engine/classes/user.php");
		// }
		// $user = new FDK_User;
		// $user = json_decode(json_encode($user->user(0)));
		// var_dump($user);
		public function getUserInfo($uid = 0) {
			$this->uid = $uid;
			include("engine/database.php");
			$sql = "SELECT * FROM users";
			if (is_numeric($this->uid)) {
				if ($this->uid != 0) {
					$sql .= " WHERE id = ?";
				}
			} else {
				$sql .= " WHERE user_id = ?";
			}
			$stmt = $pdo->prepare($sql);
			if ($this->uid != 0 || !is_numeric($this->uid)) {
				$stmt->execute([$this->uid]);
				return $stmt->fetch();
			} else {
				$stmt->execute();
				return $stmt->fetchAll();
			}
		}
		// id of user, id of game, id of platform
		// if (!isset($FDKUSER)) {
		// 	require("engine/classes/user.php");
		// }
		// $user = new FDK_User;
		// $stats = json_decode(json_encode($user->stats(1, 1, 1)));
		// var_dump($stats);
		public function getUserStats($uid, $gid, $pid) {
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
		public function __call($method, $arguments) {
			if ($method == 'user') {
				if (count($arguments) == 1) {
					return call_user_func_array(array($this,'getUserInfo'), $arguments);
				}
			} elseif ($method == 'stats') {
				if (count($arguments) == 3) {
					return call_user_func_array(array($this,'getUserStats'), $arguments);
				}
			}
		}
	}
	$FDKUSER = true;
?>