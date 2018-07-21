<?PHP
	// prints "aMemberVar Member Variable"
	// $FDK_Team = new FDK_Team;
	// $element = 'aMemberVar';
	// print $FDK_Team->$element;
	class FDK_Team { 
		public $aMemberVar = 'aMemberVar Member Variable';
		public $aFuncName = 'aMemberFunc';

		function aMemberFunc() {
			print 'Inside `aMemberFunc()`';
		}
	}
?>