<?php
namespace System;

class Hint
{

	private $DB;

	/**
	 * Konstruktor der Klasse
	 */
	public function __construct()
	{
		$this->DB = $GLOBALS['DB'];
	}
	
	public function getNameHints() {
		$array = array();
		array_push($array, HINT_NAME_MIN_LENGTH);
		array_push($array, HINT_NAME_MAX_LENGTH);
		array_push($array, HINT_NAME_PERMITTED_CHARS);
		
		return $array;
	}
	
	public function getUsernameHints() {
		$array = array();
		array_push($array, HINT_USERNAME_MIN_LENGTH);
		array_push($array, HINT_USERNAME_MAX_LENGTH);
		array_push($array, HINT_USERNAME_PERMITTED_CHARS);
	
		return $array;
	}
	
	public function getEmailHints() {
		$array = array();
		array_push($array, HINT_EMAIL_MAX_LENGTH);
		
		return $array;
	}
	
	public function getPasswordHints() {
		$array = array();
		array_push($array, HINT_PASSWORD_MIN_LENGTH);
		array_push($array, HINT_PASSWORD_MAX_LENGTH);
	
		return $array;
	}
	
	public function getSubjectHints() {
		$array = array();
		array_push($array, HINT_SUBJECT_MIN_LENGTH);
		array_push($array, HINT_SUBJECT_MAX_LENGTH);
		
		return $array;
	}
	
	public function getMessageHints() {
		$array = array();
		array_push($array, HINT_MESSAGE_MIN_LENGTH);
		array_push($array, HINT_MESSAGE_MAX_LENGTH);
		
		return $array;
	}
	
	/**
	 * Diese Funktion gibt die uebergebenen Fehlermeldungen
	 * optisch ansprechend wieder.
	 * 
	 * @param array $hints
	 * @param bool $all
	 * @param bool $last
	 */
	public function displayHints($hints, $all, $last) {
		if (is_array($hints)) {
			if ($last)
				echo '<li><a href="#" class="last">' . $hints[0] . '</a></li>';
			else
				echo '<li><a href="#">' . $hints[0] . '</a></li>';
			if (count($hints[1]) > 0 && $all) {
				echo "<ol>";
				foreach ($hints[1] as $hint) {
					if (($hint != null) && ($hint != ""))
						echo '<li><a href="#">' . $hint . '</a></li>';
				}
				echo "</ol>";
			}
		} else {
			if ($last)
				echo '<li><a href="#" class="last">' . $hints . '</a></li>';
			else
				echo '<li><a href="#">' . $hints . '</a></li>';
		}
	}
}

?>