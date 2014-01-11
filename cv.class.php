<?php


class CV {
	
	private $id;
	private $title;
	private $subtitle;
	private $person;
	private $trainings;
	private $experience;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function getSubTitle() {
		return $this->title;
	}
	
	public function setSubTitle($subTitle) {
		$this->subTitle = $subTitle;
	}
	
	public function getPerson() {
		return $this->person;
	}
	
	public function setPerson($person) {
		$this->person = $person;
	}
	
	public function getTrainings() {
		return $this->trainings;
	}
	
	public function setTrainings($trainings) {
		$this->trainings = $trainings;
	}
	
	public function getExperiences() {
		return $this->experiences;
	}
	
	public function setExperiences($experiences) {
		$this->experiences = $experiences;
	}
	
}

class Identity {
	private $name;
	private $nickname;
	private $forname;
	private $image;
	private $birthdate;
	
	function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	function getNickname() {
		return $this->nickname;
	}
	
	public function setNickname($nickname) {
		$this->nickname = $nickname;
	}
	
	function getForname() {
		return $this->forname;
	}
	
	public function setForname($forname) {
		$this->forname = $forname;
	}
	
	function getImage() {
		return $this->image;
	}
	
	public function setImage($image) {
		$this->image = $image;
	}
	
	function getBirthdate() {
		return $this->birthdate;
	}
	
	public function setBirthdate($birthdate) {
		$this->birthdate = $birthdate;
	}
	
}

class Person {
	private $identity;
	private $email;
	private $phone;
	private $mobile;
	private $address;
	private $webs;
	private $socials;
	
	public function getIdentity() {
		return $this->identity;
	}
	
	public function setIdentity($identity) {
		$this->identity = $identity;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
	}	
	
	public function getMobile() {
		return $this->mobile;
	}
	
	public function setMobile($mobile) {
		$this->mobile = $mobile;
	}
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
	}
	
	public function getWebs() {
		return $this->webs;
	}
	
	public function setWebs($webs) {
		$this->webs = $webs;
	}
	
	public function getSocials() {
		return $this->socials;
	}
	
	public function setSocials($socials) {
		$this->socials = $socials;
	}
}   
   
 class Address {
	private $street;
	private $complement1;
	private $complement2;
	private $complement3;
	private $postalCode;
	private $city;
	private $country;
	
	public function getStreet() {
		return $this->street;
	}
	
	public function setStreet($street) {
		$this->street = $street;
	}
	
	public function getComplement1() {
		return $this->complement1;
	}
	
	public function setComplement1($complement1) {
		$this->complement1 = $complement1;
	}
	
	public function getComplement2() {
		return $this->complement2;
	}
	
	public function setComplement2($complement2) {
		$this->complement2 = $complement2;
	}
	
	public function getComplement3() {
		return $this->complement3;
	}
	
	public function setComplement3($complement3) {
		$this->complement3 = $complement3;
	}
	
	public function getPostalCode() {
		return $this->postalCode;
	}
	
	public function setpostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
	}
	
	public function getCountry() {
		return $this->country;
	}
	
	public function setCountry($country) {
		$this->country = $country;
	}
 }
 
 class Skill {
	private $id;
	private $type;
	private $itemName;
	private $description;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
 }
 
 class Training {
	private $id;
	private $type;
	private $itemName;
	private $description;
	private $date;
	private $skills;
	private $comment;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function getDate() {
		return $this->date;
	}
	
	public function setDate($date) {
		$this->date = $date;
	}
	
	public function getSkills() {
		return $this->skills;
	}
	
	public function setSkills($skills) {
		$this->skills = $skills;
	}
	
	public function getComment() {
		return $this->comment;
	}
	
	public function setComment($comment) {
		$this->comment = $comment;
	}
 }
 
 class Experience {
	private $id;
	private $type;
	private $itemName;
	private $description;
	private $date;
	private $skills;
	private $comment;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function getDate() {
		return $this->date;
	}
	
	public function setDate($date) {
		$this->date = $date;
	}
	
	public function getSkills() {
		return $this->skills;
	}
	
	public function setSkills($skills) {
		$this->skills = $skills;
	}
	
	public function getComment() {
		return $this->comment;
	}
	
	public function setComment($comment) {
		$this->comment = $comment;
	}
 }
 
?>
  