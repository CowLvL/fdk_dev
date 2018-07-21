<?PHP
	// prints "aMemberVar Member Variable"
	// $FDK_User = new FDK_User;
	// $element = 'aMemberVar';
	// print $FDK_User->$element;
	class FDK_User { 
		public $aMemberVar = 'aMemberVar Member Variable';
		public $aFuncName = 'aMemberFunc';

		function aMemberFunc() {
			print 'Inside `aMemberFunc()`';
		}
	}
?>