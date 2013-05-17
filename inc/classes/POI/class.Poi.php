<?php

namespace System;

class Poi
{
	private $DB;

	/**
	 * Konstruktor der Klasse
	 */
	public function __construct()
	{
		$this->DB = $GLOBALS['DB'];
	}

	public function isPoiNameAlreadyAssigned($poiName)
	{
		$sql = "SELECT name FROM " . DB_PREFIX . "poi
				WHERE name = '". $this->DB->escapeString($poiName) ."'";
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return true;
		else
			return false;
	}
	
	
	public function isPoiAddressAlreadyAssigned($poiStreet, $poiZip, $poiCity)
	{
		$sql = "SELECT * FROM " . DB_PREFIX . "poi
				WHERE street = '". $this->DB->escapeString($poiStreet) ."'
				AND zip = '". $this->DB->escapeString($poiZip) ."'
				AND city = '". $this->DB->escapeString($poiCity) ."'";
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return true;
		else
			return false;
	}


	public function getPoiCategories()
	{
		$sql = "SELECT * FROM " . DB_PREFIX . "category";
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result;
		else
			return null;
	}
	
	
	public function getAllPois()
	{
		$sql = "SELECT * FROM " . DB_PREFIX . "poi";
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result;
		else
			return null;
	}
	
	
	public function getPoi($pid)
	{
		if (!is_numeric($pid))
			die();

		$sql = "SELECT * FROM " . DB_PREFIX . "poi
				WHERE poiID = " . $pid;
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result[0];
		else
			return null;
	}
	
	
	public function getAvgPoiRating($pid)
	{
		if (!is_numeric($pid))
			die();
	
		$sql = "SELECT AVG(rating) AS rating FROM " . DB_PREFIX . "rel_poi_rating
				WHERE poiID = " . $pid;
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result[0]['rating'];
		else
			return null;
	}
	
	public function getCountPoiRating($pid)
	{
		if (!is_numeric($pid))
			die();
	
		$sql = "SELECT count(*) AS count FROM " . DB_PREFIX . "rel_poi_rating
				WHERE poiID = " . $pid;
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result[0]['count'];
		else
			return null;
	}
	
	
	public function getLatestPois($uid = null, $count = null, $orderBy = "creationTimestamp", $order = "DESC")
	{
		if (!is_numeric($uid) || !is_numeric($count))
			die();
		if ($order != "ASC" && $order != "DESC")
			die();
		
		$sql = "SELECT * FROM " . DB_PREFIX . "poi";
		
		if ($uid != null)
			$sql .= " WHERE userId = " . $uid;
		$sql .= " ORDER BY " . $orderBy . " " .$order;
		if ($count != null)
			$sql .= " LIMIT " . $count;

		$result = $this->DB->query($sql);
		
		if(count($result) > 0)
			return $result;
		else
			return null;
	}
	
	
	public function getAllAvgPoiRating($count)
	{
		if (!is_numeric($count))
			die();

		$sql = "SELECT poi.poiId, AVG(rating) as rating, name FROM " . DB_PREFIX . "rel_poi_rating, " . DB_PREFIX . "poi
				WHERE poi.poiId = rel_poi_rating.poiId
				GROUP BY poiId
				ORDER BY rating DESC
				LIMIT " . $count;
	
		$result = $this->DB->query($sql);
	
		if(count($result) > 0)
			return $result;
		else
			return null;
	}
	
	
	public function getPoiCategory($poiId)
	{
		if (!is_numeric($poiId))
			die();

		$sql = "SELECT rel_poi_category.categoryId AS rel, category.categoryId AS cat, description, poiId FROM " . 
				DB_PREFIX . "rel_poi_category, " . DB_PREFIX . "category
				WHERE poiID = " . $poiId . "
				AND rel_poi_category.categoryId = category.categoryId";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return $result[0]['description'];
		else
			return null;
	}


	public function setPoiRating($poiId, $rating)
	{
		$sql = "INSERT INTO  ". DB_PREFIX ."rel_poi_rating
				(
					poiId,
					rating
				)
				VALUES
				(
					'". $this->DB->escapeString($poiId) ."',
					'". $this->DB->escapeString($rating) ."'
				)";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return true;
		else
			return false;
	}


	public function setPoi($userId, $name, $description, $category, $street, $zip, $city, $lat, $lng, $rating)
	{
		$sql = "INSERT INTO  ". DB_PREFIX ."poi
				(
					userId,
					name,
					description,
					street,
					zip,
					city,
					lat,
					lng,
					creationTimestamp
				)
				VALUES
				(
					'". $this->DB->escapeString($userId) ."',
					'". $this->DB->escapeString($name) ."',
					'". $this->DB->escapeString($description) ."',
					'". $this->DB->escapeString($street) ."',
					'". $this->DB->escapeString($zip) ."',
					'". $this->DB->escapeString($city) ."',
					'". $this->DB->escapeString($lat) ."',
					'". $this->DB->escapeString($lng) ."',
					CURRENT_TIMESTAMP
				)";

		$resultPoiInsert = $this->DB->query($sql);
		$insertedId = $this->DB->insertId();

		$resultCategoryInsert = $this->setPoiToCategory($insertedId, $category);
		$resultRatingInsert = $this->setPoiRating($insertedId, $rating);
	
		if (count($resultPoiInsert) > 0 && $resultCategoryInsert && $resultRatingInsert)
			return true;
		else
			return false;
	}
	
	
	public function setPoiToCategory($poiId, $categoryId)
	{
		$sql = "INSERT INTO  ". DB_PREFIX ."rel_poi_category
				(
					poiId,
					categoryId
				)
				VALUES
				(
					'". $this->DB->escapeString($poiId) ."',
					'". $this->DB->escapeString($categoryId) ."'
				)";
		
		$result = $this->DB->query($sql);
		
		if (count($result) > 0)
			return true;
		else
			return false;
	}

}

?>