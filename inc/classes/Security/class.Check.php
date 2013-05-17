<?php
namespace System;

class Check
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
	 * Überprüft, ob eine E-Mail-Adresse bereits vergeben ist.
	 * 
	 * @param $mail Email-Adresse
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isMailAlreadyAssigned($mail)
	{
		$object = new Check();
		$sql =   "SELECT userId "
				."FROM ".DB_PREFIX."user " 
				."WHERE mail = '".$mail."'";
		
		$result = $object->DB->query($sql);
		
		if (count($result) > 0)
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
		$firstPart 	= "[a-zA-Z\d][\w\.-]*[a-zA-Z\d]";
		$secondPart = "[a-zA-Z\d][\w\.-]*\.[a-zA-Z]{2,4}";
		$regExp 	= "/^".$firstPart."@".$secondPart."$/";
		
		if (preg_match($regExp, $mail))
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
		if ($mailA === $mailB)
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
		if ($passwordA === $passwordB)
			return true;
		else
			return false;
	}
	
	public function isPasswordSave($password) {
		if (strlen($password) < 6)
			return false;
		else
			return true;
	}

	
	/**
	 * Ermittelt, ob eine Login-Kombination gueltig ist.
	 * 
	 * @param $username Benutzername
	 * @param $password Passwort (bereits verschluesselt)
	 * @return boolean
	 */
	public function isLoginValid($username, $password)
	{
		$sql =	"SELECT userId 
				FROM ".DB_PREFIX."user
				WHERE username = '". $this->DB->escapeString($username) ."'
				AND password = '". $this->DB->escapeString($password) ."'";
	
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return $result[0]['userId'];
		else
			return null;
	}

	/**
	 * Überprüft, ob der "user_auth_key" noch gültig ist.
	 * 
	 * @param $uid ID des Benutzer
	 * @return boolean True, wenn ja ansonsten False
	 */
	public function isUserAuthKeyStillValid($uid)
	{
		if (!is_numeric($uid))
			die();

		$object = new Check();
		$sql =   "SELECT NOW() AS Now";
		$result = $object->DB->query($sql);

		$sql2 =  "SELECT TIMESTAMPADD(MONTH,1,user_created) AS Deadline "
				."FROM ".DB_PREFIX."user " 
				."WHERE user_id = '".$uid."'";
		$result2 = $object->DB->query($sql2);
		
		if ($result[0]['Now'] > $result2[0]['Deadline'])
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
		$sql =   "SELECT userId "
				."FROM ".DB_PREFIX."user " 
				."WHERE username = '".$username."'";
		
		$result = $object->DB->query($sql);
		
		if (count($result) > 0)
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
		//TODO: Blacklist mit NICHT erlaubten Benutzernamen z.B. "___"
		// \w : [a-zA-Z0-9_]
		$regExp = "/^[\w]{".MIN_CHARS_USERNAME.",".MAX_CHARS_USERNAME."}$/";
		
		if (preg_match($regExp, $username))
			return true;
		else
			return false;
	}

	public function isFirstNameValid($firstName)
	{
		$regExp = "/^[\w\s]{".MIN_CHARS_FIRST_NAME.",".MAX_CHARS_FIRST_NAME."}$/";
		
		if (preg_match($regExp, $firstName))
			return true;
		else
			return false;
	}

	public function isLastNameValid($lastName)
	{
		$regExp = "/^[\w\s]{".MIN_CHARS_LAST_NAME.",".MAX_CHARS_LAST_NAME."}$/";
		
		if (preg_match($regExp, $lastName))
			return true;
		else
			return false;
	}
	
	public function isNameValid($name)
	{
		$regExp = "/^[\w\s]{".MIN_CHARS_NAME.",".MAX_CHARS_NAME."}$/";
		
		if (preg_match($regExp, $name))
			return true;
		else
			return false;
	}
	
	public function isZipCodeValid($zipcode)
	{
		if (!is_numeric($zipcode))
			die();
		
		$regExp = "/^66([0-9]{3})$/";
		
		if (preg_match($regExp, $zipcode))
			return true;
		else
			return false;
	}
	
	public function isAddressValid($lat, $lng)
	{
		if ($lat < 1 || $lng < 1)
			return false;
		else
			return true;
	}
	
	public function isSexValid($sex)
	{
		$array = array("m", "f");
		if (in_array($sex, $array)) {
			return true;
		} else {
			return false;
		}
	}

	public function isVisibilityValid($visibility)
	{
		if (!is_numeric($visibility))
			die();

		$array = array(0, 1, 2);
		if (in_array($visibility, $array)) {
			return true;
		} else {
			return false;
		}
	}

	public function isHomepageValid($url)
	{
		return preg_match('/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url);
	}

	public function isFacebookValid($facebook)
	{
		return preg_match('/^[a-z\d.]{'.MIN_CHARS_FACEBOOK.','.MAX_CHARS_FACEBOOK.'}$/i', $facebook);
	}

	public function isTwitterValid($twitter)
	{
		return preg_match('/^[a-zA-Z0-9_]{'.MIN_CHARS_TWITTER.','.MAX_CHARS_TWITTER.'}$/', $twitter);
	}
	
	public function isBirthdayValid($date)
	{
		$regExp = "/^([0-9]{1,2}).([0-9]{1,2}).([0-9]{4})$/";
	
		if (preg_match($regExp, $date))
			return true;
		else
			return false;
	}

}
?>