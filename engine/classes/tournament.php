<?PHP
	// prints "aMemberVar Member Variable"
	// $FDK_Tournament = new FDK_Tournament;
	// $element = 'aMemberVar';
	// print $FDK_Tournament->$element;
	class FDK_Tournament { 
		public $aMemberVar = 'aMemberVar Member Variable';
		public $aFuncName = 'aMemberFunc';

		function aMemberFunc() {
			print 'Inside `aMemberFunc()`';
		}
	}
	$FDKTOURNAMENT = true;
?>