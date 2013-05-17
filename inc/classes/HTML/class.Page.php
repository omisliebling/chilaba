<?php
//Namespace der Klasse
namespace System;

class Page
{
	private $title = '';
	private $author = HTML_AUTHOR;
	private $description = '';
	private $keywords = '';
	private $breadcrumb = '';
	private $DB;

	/**
	 * Konstruktor der Klasse
	 */
	public function __construct($title = '', $description = '', $keywords = '') {
		$this->title = $title;
		$this->description = $description;
		$this->keywords = $keywords;
		
		$this->DB = $GLOBALS['DB'];
	}
	
	/**
	 * Generiert eine neue Seite.
	 * 
	 * @param String $reference
	 * @param String $content Funktion die aufgerufen werden soll, um Inhalt darzustellen
	 * @param String $newClass Wird eine weitere Klasse benoetigt? z.B. System\Form
	 * @param String $params Werden bei $content Parameter uebergeben?
	 */
	public function buildPage($reference, $newClass = null, $content = 'printContent', $params = null) {
		$html = new HTML($reference);
		
		if ($newClass != null) {
			$class = new $newClass($reference);
		} else {
			$class = $html;
		}
		
		$html->printHead($this->title, $this->description, $this->keywords);
		$html->printBody('', false);
		$html->printHeader();
		$class->{$content}($params);
		$html->printFoot();
	}
	
	public function setBreadcrumb($path) {
		$this->breadcrumb = $path;
	}
	
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getAuthor() {
		return $this->author;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getKeywords() {
		return $this->keywords;
	}
	
	public function getBreadcrumb() {
		$utile = new Utile();
		return $utile->generateBreadcrumb($this->breadcrumb);
	}

}