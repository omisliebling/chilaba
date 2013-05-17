<?php

namespace System;

class User
{
	private $DB;

	/**
	 * Konstruktor der Klasse
	 */
	public function __construct()
	{
		$this->DB = $GLOBALS['DB'];
	}

	/**
	 * Diese Funktion legt einen Benutzer in der Datenbank an.
	 * 
	 * @param $email E-Mail-Adresse
	 * @param $password Passwort (unverschluesselt)
	 * @return boolean Hat es funktioniert?
	 */
	public function createUser($email, $password) {
		$bcrypt 	= new Bcrypt(15);
		$hash 		= $bcrypt->hash($password);
		$uniqId 	= md5(uniqid('', true));

		$sql = "INSERT INTO `".DB_NAME."`.`".DB_PREFIX."customer` (
					`email`, 
					`password`, 
					`auth_key`, 
					`create_date`
				) VALUES (
					\'". $this->DB->escapeString($email) ."\',
					\'". $this->DB->escapeString($password) ."\',
					\'". $this->DB->escapeString($uniqId) ."\',
					NOW()
				);";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Diese Funktion schaltet einen Benutzer frei.
	 *
	 * @param $email E-Mail-Adresse
	 * @param $key Benutzerschluessel
	 * @return boolean Hat es funktioniert?
	 */
	public function activateUser($email, $key) {
		$sql = "UPDATE `".DB_NAME."`.`".DB_PREFIX."customer` 
				SET `active` = \'1\' 
				WHERE `customer`.`email` = \'". $this->DB->escapeString($email) ."\'
				AND `customer`.`auth_key` = \'". $this->DB->escapeString($key) ."\';";
	
		$result = $this->DB->query($sql);
	
		if (count($result) > 0)
			return true;
		else
			return false;
	}
	
	
	
	
	
	
	
	
	
	
	/* =========================================== */
	/* =================== ALT =================== */
	/* =========================================== */
	
	/**
	 * Speichert einen Benutzer in der Datenbank.
	 * 
	 * @param String $username Benutzername
	 * @param String $password Passwort
	 * @param String $mail E-Mail-Adresse
	 * @return string|NULL
	 */
	public function setUser($username, $password, $mail)
	{
		$uniqId = md5(uniqid('', true));
		
		$sql = "INSERT INTO  ". DB_PREFIX ."user
				(
					username,
					password,
					mail,
					registrationTimestamp,
					authKey,
					lastLogin,
					lastAction
				)
				VALUES 
				(
					'". $this->DB->escapeString($username) ."',
					'". $this->DB->escapeString($password) ."',
					'". $this->DB->escapeString($mail) ."',
					CURRENT_TIMESTAMP,
					'". $this->DB->escapeString($uniqId) ."',
					CURRENT_TIMESTAMP,
					CURRENT_TIMESTAMP
				)";

		$result = $this->DB->query($sql);
		$insertedId = $this->DB->insertId();
		
		$sql2 = "INSERT INTO  ". DB_PREFIX ."profile
				(
					profileId
				)
				VALUES 
				(
					'". $this->DB->escapeString($insertedId) ."'
				)";
		
		$result2 = $this->DB->query($sql2);
		
		if (count($result) > 0)
			return $uniqId;
		else
			return null;
	}
	
	
	public function getUserProfile($userId)
	{
		if (!is_numeric($userId))
			die();
		
		$sql = "SELECT *
				FROM " . DB_PREFIX . "profile
				WHERE profileId = '" . $this->DB->escapeString($userId) . "'";
	
		$result = $this->DB->query($sql);
	
		if (count($result) > 0)
			return $result[0];
		else
			return null;
	}
	
	public function getLatestUsers($count)
	{
		if (!is_numeric($count))
			die();
		
		$sql = "SELECT userId, username
				FROM " . DB_PREFIX . "user
				WHERE activated = 1
				ORDER BY registrationTimestamp DESC 
				LIMIT ". $this->DB->escapeString($count);
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return $result;
		else
			return null;
	}
	
	public function setUserProfile($userId, $firstname = null, $lastname = null, $sex = null, $homepage = null, $facebook = null, $twitter = null)
	{
		if (!is_numeric($userId))
			die();
		
		$sql = "UPDATE  ". DB_PREFIX ."profile
				SET firstname = '". $this->DB->escapeString($firstname) ."',
					lastname = '". $this->DB->escapeString($lastname) ."',";
		if ($sex != null) 
			$sql .= " sex = '". $this->DB->escapeString($sex) ."',";
		else 
			$sql .= " sex = NULL,";
		$sql .= " homepage = '". $this->DB->escapeString($homepage) ."',
					facebook = '". $this->DB->escapeString($facebook) ."',
					twitter = '". $this->DB->escapeString($twitter) ."'
				WHERE profileId = '". $this->DB->escapeString($userId) ."'";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return true;
		else
			return false;
	}
	

	/**
	 * Ermittelt die Benutzer-ID eines Benutzernamens.
	 * 
	 * @param String $username Benutzername
	 * @return int|NULL
	 */
	public function getUserIdByUsername($username)
	{
		$sql = "SELECT userId 
				FROM " . DB_PREFIX . "user
				WHERE username = '" . $this->DB->escapeString($username) . "'";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return $result[0]['userId'];
		else
			return null;
	}
	
	
	/**
	 * Ermittelt den Benutzernamen zu einer UserID.
	 *
	 * @param String $userId Benutzer-ID
	 * @return string|NULL
	 */
	public function getUsername($uid)
	{
		if (!is_numeric($uid))
			die();
		
		$sql = "SELECT username
				FROM " . DB_PREFIX . "user
				WHERE userId = '" . $this->DB->escapeString($uid) . "'";
	
		$result = $this->DB->query($sql);
	
		if (count($result) > 0)
			return $result[0]['username'];
		else
			return null;
	}
	
	
	/**
	 * Ermittelt alle Benutzerinformationen
	 *
	 * @param String $userId Benutzer-ID
	 * @return string|NULL
	 */
	public function getUser($uid)
	{
		if (!is_numeric($uid))
			die();
	
		$sql = "SELECT *
				FROM " . DB_PREFIX . "user
				WHERE userId = '" . $this->DB->escapeString($uid) . "'";
	
		$result = $this->DB->query($sql);
	
		if (count($result) > 0)
			return $result[0];
		else
			return null;
	}
	

	/**
	 * Diese Funktion schaltet einen Benutzer frei.
	 * 
	 * @param String $username Benutzername
	 * @param String $key Benutzerschluessel
	 * @return boolean
	 */
// 	public function activateUser($username, $key)
// 	{
// 		$sql = "UPDATE  ". DB_PREFIX ."user
// 				SET activated = 1
// 				WHERE username = '". $this->DB->escapeString($username) ."'
// 				AND authKey = '". $this->DB->escapeString($key) ."'";
		
// 		$result = $this->DB->query($sql);
		
// 		if (count($result) > 0)
// 			return true;
// 		else
// 			return false;
// 	}
	
	/**
	 * Meldet den Benutzer an.
	 *
	 * @param $username Benutzername
	 * @param $password Passwort (bereits verschluesselt)
	 * @return boolean
	 */
	public function loginUser($username, $password, $autologin = false)
	{
		$check = new Check();
		$userId = $check->isLoginValid($username, $password);
		
		if((!is_numeric($userId) && ($userId != null)) || !is_bool($autologin))
			die();
		
		if ($userId != null) {
			$sql = "UPDATE ". DB_PREFIX ."user
					SET sessionId = '". $this->DB->escapeString(session_id()) ."',
						autologin = NULL,
						ipv4 = '".$_SERVER['REMOTE_ADDR']."',
						lastLogin = CURRENT_TIMESTAMP,
						lastAction = CURRENT_TIMESTAMP
					WHERE userId = " . $userId;
			
			$result = $this->DB->query($sql);
			
			if (count($result) > 0) {
// 				if ($autologin)
// 					$this->setAutologin($userId, $autologin);

				$_SESSION['userId'] = $userId;
				$_SESSION['username'] = $username;
				$_SESSION['autologin'] = $autologin;

				return true;
			} else
				return false;
		}
		
		return false;
	}

	/**
	 * Meldet den Benutzer ab.
	 * 
	 * @return boolean
	 */
	public function logoutUser($deleteCookie = true)
	{
		// Cookie loeschen
		if ($deleteCookie == true) {
			if(isset($_COOKIE['autologin'])) {
				setcookie("autologin", "", time() - 60 * 60 * 24);
			}
		}
		
		// Session-ID aus der Datenbank loeschen
		$sql = "UPDATE ". DB_PREFIX ."user
				SET sessionId = NULL,
					autologin = NULL,
					ipv4 = NULL
				WHERE userId = " . $_SESSION['userId'];
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0) {
			// $_SESSION leeren
			$_SESSION = array();
			
			// Session loeschen
			session_destroy();
			
			return true;
		} else
			return false;
	}

	/**
	 * Aktualisiert den Timestamp des Benutzers um zu
	 * ermitteln, wann der Benutzer zuletzt auf die Seite
	 * zugegriffen hat.
	 */
	public function setLastAction()
	{
		$sql = "UPDATE " . DB_PREFIX . "user
				SET lastAction = CURRENT_TIMESTAMP
				WHERE userId = " . $_SESSION['userId'];
		
		$result = $this->DB->query($sql);
	}

	/**
	 * Inaktive Benutzer werden nach 20 Minuten zur Sicherheit
	 * automatisch abgemeldet.
	 */
	public function logoutInactiveUser()
	{
		$sql = "UPDATE " . DB_PREFIX . "user
				SET sessionId = NULL,
					autologin = NULL,
					ipv4 = NULL
				WHERE '".(time()-60*20)."' > lastAction
				AND autologin IS NULL";
		
		$result = $this->DB->query($sql);
	}

	/**
	 * Speichert die Anmeldung des Benutzers in der
	 * Datenbank, damit er sich automatisch einloggt.
	 * 
	 * @param int $userId Benutzer-ID
	 * @param boolean $autologin Automatisch anmelden?
	 * @return boolean
	 */
	public function setAutologin($userId, $autologin = false)
	{
		if((!is_numeric($userId) && ($userId != null)) || !is_bool($autologin))
			die();
		
		// Zufallscode erzeugen
		$partOne = substr(time() - rand(100, 100000), 5, 10);
		$partTwo = substr(time() - rand(100, 100000), -5);
		$loginId = md5($partOne . $partTwo);
			
		// Code im Cookie speichern, 10 Jahre duerfte reichen
		setcookie("autologin", $loginId, time() + 60 * 60 * 24 * 365 * 10);
		
		$sql = "UPDATE " . DB_PREFIX . "user
				SET autologin = '" . $loginId . "'
				WHERE userId = " . $userId;
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob eine E-Mail-Adresse bereits vergeben ist.
	 *
	 * @param $mail Email-Adresse        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isMailAlreadyAssigned($mail)
	{
		$object = new Check();
		$sql = "SELECT user_id " . "FROM " . DB_PREFIX . "user " . "WHERE user_email = '" . $mail . "'";
		
		$result = $object->DB->query($sql);
		
		if(count($result) > 0)
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob es sich um eine gültige E-Mail-Adresse
	 * handelt.
	 *
	 * @param $mail E-Mail-Adresse        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isMailValid($mail)
	{
		$firstPart = "[a-zA-Z\d][\w\.-]*[a-zA-Z\d]";
		$secondPart = "[a-zA-Z\d][\w\.-]*\.[a-zA-Z]{2,4}";
		$regExp = "/^" . $firstPart . "@" . $secondPart . "$/";
		
		if(preg_match($regExp, $mail))
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob die übergebenen E-Mail-Adressen
	 * identisch sind.
	 *
	 * @param $mailA E-Mail-Adresse        	
	 * @param $mailB E-Mail-Adresse-Bestätigung        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isMailAEqualToMailB($mailA, $mailB)
	{
		if($mailA === $mailB)
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob die übergebenen Passwörtern
	 * identisch sind.
	 *
	 * @param $passwordA Passwort        	
	 * @param $passwordB Passwort-Bestätigung        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isPasswordAEqualToPasswordB($passwordA, $passwordB)
	{
		if($passwordA === $passwordB)
			return true;
		else
			return false;
	}

	/**
	 * Ermittelt, ob ein Benutzer aktiviert ist.
	 *
	 * Ein Benutzer gilt als aktiviert, wenn in der Tabelle "user"
	 * die Eigenschaft "activated" = 1 ist.
	 *
	 * Standardmäßig ist "activated" = 0.
	 * Durch die Bestätigungsmail kann der Benutzer
	 * "activated" auf 1 setzen. Das soll verhindern, dass
	 * eine ungültige E-Mail-Adresse angegeben wird.
	 *
	 * @param $uid ID des Benutzers
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isUserActivated($uid)
	{
		if(!is_numeric($uid))
			die();
		
		$sql = "SELECT activated
				FROM " . DB_PREFIX . "user
				WHERE userId = '" . $uid . "'";
		
		$result = $this->DB->query($sql);
		
		if($result[0]['activated'] == 1)
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob der "user_auth_key" noch gültig ist.
	 *
	 * @param $uid ID
	 *        	des Benutzer
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isUserAuthKeyStillValid($uid)
	{
		if(!is_numeric($uid))
			die();
		
		$object = new Check();
		$sql = "SELECT NOW() AS Now";
		$result = $object->DB->query($sql);
		
		$sql2 = "SELECT TIMESTAMPADD(MONTH,1,user_created) AS Deadline " . "FROM " . DB_PREFIX . "user " . "WHERE user_id = '" . $uid . "'";
		$result2 = $object->DB->query($sql2);
		
		if($result[0]['Now'] > $result2[0]['Deadline'])
			return false;
		else
			return true;
	}

	/**
	 * Überprüft, ob der Benutzername bereits vergeben ist.
	 *
	 * @param $username Benutzername        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isUsernameAlreadyAssigned($username)
	{
		$object = new Check();
		$sql = "SELECT user_id " . "FROM " . DB_PREFIX . "user " . "WHERE user_name = '" . $username . "'";
		
		$result = $object->DB->query($sql);
		
		if(count($result) > 0)
			return true;
		else
			return false;
	}

	/**
	 * Überprüft, ob der Benutzername gültig ist.
	 *
	 * @param $username Benutzername        	
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isUsernameValid($username)
	{
		// TODO: Blacklist mit NICHT erlaubten Benutzernamen z.B. "___"
		// \w : [a-zA-Z0-9_]
		$regExp = "/^[\w]{" . MIN_CHARS_USERNAME . "," . MAX_CHARS_USERNAME . "}$/";
		
		if(preg_match($regExp, $username))
			return true;
		else
			return false;
	}

	public function isFirstNameValid($firstName)
	{
		$regExp = "/^[\w\s]{0," . MAX_CHARS_FIRST_NAME . "}$/";
		
		if(preg_match($regExp, $firstName))
			return true;
		else
			return false;
	}

	public function isLastNameValid($lastName)
	{
		$regExp = "/^[\w\s]{0," . MAX_CHARS_LAST_NAME . "}$/";
		
		if(preg_match($regExp, $lastName))
			return true;
		else
			return false;
	}

	public function isNameValid($name)
	{
		$regExp = "/^[\w\s]{" . MIN_CHARS_NAME . "," . MAX_CHARS_NAME . "}$/";
		
		if(preg_match($regExp, $name))
			return true;
		else
			return false;
	}

	public function isSexValid($sex)
	{
		$array = array("m", "f");
		if(in_array($sex, $array))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function isVisibilityValid($visibility)
	{
		if(!is_numeric($visibility))
			die();
		
		$array = array(0, 1, 2);
		if(in_array($visibility, $array))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

/*
 * class User { protected $db;			// Ugh, database link protected $tb_users;	//
 * The users table, duh protected $tb_meta;		// The users meta table, jeez
 * protected $save_valid;		// Do we have valid user data? Used for saving and
 * loading meta protected $save_meta_valid;	// Valid meta data (same as above)
 * public $data;			// This is the data array (containing a "meta" array as the
 * last element) function __construct($db, $query = false, $load_meta = false,
 * $tb_users = "users", $tb_meta = "users_meta") { $this->db = $db;
 * $this->tb_users = $tb_users; $this->tb_meta = $tb_meta; $this->save_valid =
 * false; $this->save_meta_valid = false; if ($id) $this->load($query,
 * $load_meta); } function __destruct() { } // Overloading public function
 * __set($name, $value) { $this->data[$name] = $value; } public function
 * __get($name) { if (array_key_exists($name, $this->data)) { return
 * $this->data[$name]; } $trace = debug_backtrace(); trigger_error( 'Undefined
 * property via __get(): ' . $name . ' in ' . $trace[0]['file'] . ' on line ' .
 * $trace[0]['line'], E_USER_NOTICE); return null; } // I don't think there'll
 * be much trouble here. We just load in a user (w/ or w/out meta). $query can
 * be either a username or a user id. function load($query, $load_meta = false)
 * { if (is_numeric($query)) $sql = "SELECT * FROM `{$this->tb_users}` WHERE
 * `id` = {$query} LIMIT 1"; else $sql = "SELECT * FROM `{$this->tb_users}`
 * WHERE `username` = {$query} LIMIT 1"; $rs = mysql_query($sql, $this->db); if
 * (!$rs || @mysql_num_rows($rs) == 0) return false; $this->clear(); $row =
 * mysql_fetch_assoc($rs); $this->data = $row; $this->save_valid = true; if
 * ($load_meta) return $this->loadMeta(); return true; } // Load the meta for
 * the current user function loadMeta() { if ($this->save_valid) { $sql =
 * "SELECT * FROM `{$this->tb_meta}` WHERE `id` = {$this->data["id"]} LIMIT 1";
 * $rs = mysql_query($sql, $this->db); if (!$rs || @mysql_num_rows($rs) == 0)
 * return false; $row = mysql_fetch_assoc($rs); $this->data["meta"] = $row;
 * $this->save_meta_valid = true; return true; } else return false; } function
 * save($save_meta = false) { if ($this->save_valid) { $id = $this->data["id"];
 * $query = ""; foreach($this->data as $key => $value) { if ($key != "meta" &&
 * $key != "id") { if (!is_numeric($value)) $value = "'{$value}'"; $query .=
 * "`{$key}` = {$value}, "; } } $query = rtrim($query, " ,"); $sql = "UPDATE
 * `{$this->tb_users}` SET {$query} WHERE `id` = {$id} LIMIT 1"; $return =
 * mysql_query($sql, $this->db); if ($save_meta) return $this->saveMeta(); else
 * return $return; } return false; } function saveMeta() { if
 * ($this->save_meta_valid) { $id = $this->data["id"]; $query = "";
 * foreach($this->data["meta"] as $key => $value) { if ($key != "id") { if
 * (!is_numeric($value)) $value = "'{$value}'"; $query .= "`{$key}` = {$value},
 * "; } } $query = rtrim($query, " ,"); $sql = "UPDATE `{$this->tb_meta}` SET
 * {$query} WHERE `id` = {$id} LIMIT 1"; return mysql_query($sql, $this->db); }
 * return false; } function create($username, $load_meta = false) { $sql =
 * "SELECT `id` FROM `{$this->tb_users}` WHERE `username` = '{$username}'"; $rs
 * = mysql_query($sql, $this->db); if (mysql_num_rows($rs) > 0) return false;
 * $sql = "INSERT INTO `{$this->tb_users}` (`username`) VALUES ('$username')";
 * if (!mysql_query($sql, $this->db)) return false; $id =
 * mysql_insert_id($this->db); $sql = "INSERT INTO `{$this->tb_meta}` (`id`)
 * VALUES ($id)"; if (!mysql_query($sql, $this->db)) return false; return
 * $this->load($id, $load_meta); } function validate() { if
 * (isset($this->data["id"])) { $this->save_valid = true; if
 * (isset($this->data["meta"])) $this->save_meta_valid = true; else
 * $this->save_meta_valid = false; } else $this->save_valid =
 * $this->save_meta_valid = false; } function clear() { $this->data = array();
 * $this->save_meta_valid = $this->save_valid = false; } }
 */

?>