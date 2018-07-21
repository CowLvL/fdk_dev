<?PHP
	function getTimeDiff($timestamp) {
		$how_long_ago = '';
		$seconds = time() - $timestamp; 
		$minutes = (int)($seconds / 60);
		$hours = (int)($minutes / 60);
		$days = (int)($hours / 24);
		if ($days >= 1) {
			$how_long_ago = $days . ' day' . ($days != 1 ? 's' : '');
		} else if ($hours >= 1) {
			$how_long_ago = $hours . ' hour' . ($hours != 1 ? 's' : '');
		} else if ($minutes >= 1) {
			$how_long_ago = $minutes . ' minute' . ($minutes != 1 ? 's' : '');
		} else {
			$how_long_ago = $seconds . ' second' . ($seconds != 1 ? 's' : '');
		}
		return $how_long_ago;
	}
?>