<?php
namespace System;

class Utile {

	/**
	 * Generiert eine Breadcrumb aus einem uebergebenen String.
	 * 
	 * @param unknown $path
	 */
	public function generateBreadcrumb($path) {
		$elements = explode(",", $path);
?>
<ul class="breadcrumb">
	<li>Breadcrumb <span class="divider">></span></li>
<?php 
	foreach ($elements as $element) {
		$link = strtolower($element);
		$link = str_replace(' ', '-', $link);

		if ($element !== end($elements)) {
?>
	<li><a href="<?php echo PROJECT_HTTP_ROOT . '/' . $link; ?>"><?php echo $element; ?></a> <span class="divider">/</span></li>
<?php
		} else {
?>
	<li class="active"><?php echo $element; ?></li>
<?php
		}
	}
?>
</ul>
<?php
	}

	
	/**
	 * Ermittelt das aktive Element in der Navigation
	 * anhand der $_SERVER['PHP_SELF'].
	 */
	public function getActiveNavigationElement($path) {
		$pos1 		= stripos($path, 'content/');
		if ($pos1 == null) {
			return null;
		}
		$pos2 		= stripos($path, '/', $pos1);
		$posStart 	= $pos2+1;
		$posEnde 	= stripos($path, '/', $posStart);
		
		return substr($path, $posStart, $posEnde-$posStart);
	}
	
	
	
	/* === ALTE FUNKTIONEN === */

	/**
	 * 
	 * @param string $dirname
	 */
	public function getDirnameArray($dirname, $index = null) {
		$searchedDirname = $dirname['dirname'];		// Dateipfad
		$trimmedDirname  = substr($searchedDirname, 1);	// Erstes "/" loeschen
		if ($trimmedDirname == null)	// Dateipfad ist Root (/)
			return 'home';

		$array = explode('/', $trimmedDirname);	// [0] = "content" Verzeichnis , [1] = gesuchtes Unterverzeichnis 
		
		if (($index != null) && (is_int($index)))
			return $array[$index];
		else
			return $array;
	}
	
	public function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '') {
		$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
		mail($to, "=?UTF-8?B?".base64_encode($subject).'?=', $message, $header_ . $header);
	}

	public function printArray($var){
		for ($i=0; $i<sizeof($var); $i++){
			if (!is_array($var[$i])){
				echo $var[$i];
			} else {
				printArray($var[$i]);
			}
		}
	}
	
	public function getBrowser() {
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";

		//First get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		} elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}

		// Next get the name of the useragent yes seperately and for good reason
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		} elseif(preg_match('/Firefox/i',$u_agent)) {
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		} elseif(preg_match('/Chrome/i',$u_agent)) {
			$bname = 'Google Chrome';
			$ub = "Chrome";
		} elseif(preg_match('/Safari/i',$u_agent)) {
			$bname = 'Apple Safari';
			$ub = "Safari";
		} elseif(preg_match('/Opera/i',$u_agent)) {
			$bname = 'Opera';
			$ub = "Opera";
		} elseif(preg_match('/Netscape/i',$u_agent)) {
			$bname = 'Netscape';
			$ub = "Netscape";
		}

		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern =  '#(?<browser>' . join('|', $known) .
					')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)) {
				$version= $matches['version'][0];
			} else {
				$version= $matches['version'][1];
			}
		} else {
			$version= $matches['version'][0];
		}

		// check if we have a number
		if ($version==null || $version=="") {$version="?";}

		return array(
					'userAgent' => $u_agent,
					'name'      => $bname,
					'version'   => $version,
					'platform'  => $platform,
					'pattern'   => $pattern
					);
	}
	
	public function getGreeting() {
		$timestamp = time();
		$hour = date("H", $timestamp);
		
		if ($hour > 17) {
			return "Guten Abend";
		} elseif ($hour > 11) {
			return "Guten Tag";
		} else {
			return "Guten Morgen";
		}
	}

	/**
	 * Die Funktion ermittelt die Koordinaten zu einer
	 * uebergebenen Adresse.
	 * 
	 * @param String $address Adresse
	 * @return array Lat, Lng
	 */
	public function getCoordinates($address) {
		// Koordinaten ermitteln
		$url = 'http://maps.google.com/maps/geo?q='.urlencode($address).'&output=csv&sensor=false';
		$get = file_get_contents($url);
		$records = explode(",",$get);
		$lat = $records['2'];
		$lng = $records['3'];
		
		return array($lat, $lng);
	}
	
	public function getDateAndTime($timestamp) {
		$dateString = "am " . date('d.m.Y', strtotime($timestamp));
		$dateString .= " um " . date('H:i', strtotime($timestamp)) . " Uhr";
		return $dateString;
	}
	
	public function printRating($count, $max = 5) {
		$result = '';
		$true = "thumb-up";
		$false = "thumb-no";
		
		for ($i=1; $i <= $max; $i++) {
			if ($i <= $count) {
				$result .= '<img src="'. PROJECT_HTTP_ROOT .'/img/nav/'.$true.'.png" style="margin-right: 3px;" />';
			} else {
				$result .= '<img src="'. PROJECT_HTTP_ROOT .'/img/nav/'.$false.'.png" style="margin-right: 3px;" />';
			}
		}
		
		return $result;
	}
	
	public function buildSelectOptions($array, $selected = null) {
		foreach ($array as $element) {
			echo '<option value="'.$element["categoryId"].'">'.$element["description"].'</option>';
		}
	}

}