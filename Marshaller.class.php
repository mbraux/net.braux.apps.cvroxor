<?php
require_once('cv.class.php');

class Marshaller {

	public function marshall($cv) {
		$xml = '<?xml version="1.0" encoding="utf-8"?>';
		$xml .= '<CV id="';
		$xml .= $cv->getId();
		$xml .= '">';
		$xml = '<!-- CV generated by http://apps.braux.net/cv -->';
		$xml .= '<TITLE>';
		$xml .= $cv->getTitle();
		$xml .= '</TITLE>';
		if ($cv->getSubTitle() != null) {
			$xml .= '<SUBTITLE>';
			$xml .= $cv->getSubTitle();
			$xml .= '</SUBTITLE>';
		}
		if ($cv->getPerson() != null) {
			$xml .= $this->marshallPerson($cv->getPerson());
		}
		if (isArray($cv->getTrainings())) {
			foreach($cv->getTrainings() as $training) {
				$xml .= $this->marshallTraining($training);
			}
		}
		if (isArray($cv->getExperiences())) {
			foreach($cv->getExperiences() as $experience) {
				$xml .= $this->marshallExperience($experience);
			}
		}
		$xml .= '</CV>',
		return $xml;
	}
	
	private function marshallSkill($skill) {
		$xml = '<SKILL id="';
		$xml .= $skill->getId();
		$xml .= '">';
		$xml .= '<TYPE>';
		$xml .= $skill->getType();
		$xml .= '</TYPE>';
		$xml .= '<ITEMNAME>';
		$xml .= $skill->getItemName();
		$xml .= '</ITEMNAME>';
		$xml .= '<DESCRIPTION>';
		$xml .= $skill->getDescription();
		$xml .= '</DESCRIPTION>';
		$xml .= '</SKILL>';
		return $xml;
	}
	
	private function marshallExperience($exp) {
		$xml = '<EXPERIENCE id="';
		$xml .= $exp->getId();
		$xml .= '">';
		$xml .= '<TYPE>';
		$xml .= $exp->getType();
		$xml .= '</TYPE>';
		$xml .= '<DATE>';
		$xml .= $exp->getDate();
		$xml .= '</DATE>';
		$xml .= '<ITEMNAME>';
		$xml .= $exp->getItemName();
		$xml .= '</ITEMNAME>';
		$xml .= '<DESCRIPTION>';
		$xml .= $exp->getDescription();
		$xml .= '</DESCRIPTION>';
		if (isset($exp->getComment())) {
			$xml .= '<COMMENT>';
			$xml .= $exp->getComment();
			$xml .= '</COMMENT>';
		}
		foreach($exp->getSkills() as $skill) {
			$this->marschallSkill($skill);
		}
		$xml .= '</EXPERIENCE>';
		return $xml;
	}
	
	private function marshallTraining($train) {
		$xml = '<EXPERIENCE id="';
		$xml .= $train->getId();
		$xml .= '">';
		$xml .= '<TYPE>';
		$xml .= $train->getType();
		$xml .= '</TYPE>';
		$xml .= '<DATE>';
		$xml .= $train->getDate();
		$xml .= '</DATE>';
		$xml .= '<ITEMNAME>';
		$xml .= $train->getItemName();
		$xml .= '</ITEMNAME>';
		$xml .= '<DESCRIPTION>';
		$xml .= $train->getDescription();
		$xml .= '</DESCRIPTION>';
		if (isset($train->getComment())) {
			$xml .= '<COMMENT>';
			$xml .= $train->getComment();
			$xml .= '</COMMENT>';
		}
		foreach($train->getSkills() as $skill) {
			$this->marschallSkill($skill);
		}
		$xml .= '</EXPERIENCE>';
		return $xml;
	}
	
	private function marshallIdentity($identity) {
		$xml = '<IDENTITY>';
		$xml .= '<NICKNAME>';
		$xml .= $identity->getNickname();
		$xml .= '</NICKNAME>';
		$xml .= '<NAME>';
		$xml .= $identity->getName();
		$xml .= '</NAME>';
		$xml .= '<FORNAME>';
		$xml .= $identity->getForname();
		$xml .= '</FORNAME>';
		$xml .= '<IMAGE>';
		$xml .= $identity->getImage();
		$xml .= '</IMAGE>';
		$xml .= '<BIRTHDATE>';
		$xml .= $identity->getBirthdate();
		$xml .= '</BIRTHDATE>';
		$xml .= '</IDENTITY>';
		return $xml;
	}
	
	private function marshallAddress($address) {
		$xml = '<ADDRESS>';
		$xml .= '<STREET>';
		$xml .= $address->getStreet();
		$xml .= '</STREET>';
		$xml .= '<COMPLEMENT1>';
		$xml .= $address->getComplement1();
		$xml .= '</COMPLEMENT1>';
		$xml .= '<COMPLEMENT2>';
		$xml .= $address->getComplement2();
		$xml .= '</COMPLEMENT2>';
		$xml .= '<COMPLEMENT3>';
		$xml .= $address->getComplement3();
		$xml .= '</COMPLEMENT3>';
		$xml .= '<POSTALCODE>';
		$xml .= $address->getPostalCode();
		$xml .= '</POSTALCODE>';
		$xml .= '<CITY>';
		$xml .= $address->getCity();
		$xml .= '</CITY>';
		$xml .= '<COUNTRY>';
		$xml .= $address->getCountry();
		$xml .= '</COUNTRY>';
		$xml .= '</ADDRESS>';
		return $xml;
	}
	
	private function marshallPerson($person) {
		$xml = '<PERSON>';
		if ($person->getIdentity() != null) {
			$xml .= $this->marshallIdentity($person->getIdentity());
		}
		$xml .= '<EMAIL>';
		$xml .= $person->getEmail();
		$xml .= '</EMAIL>';
		$xml .= '<PHONE>';
		$xml .= $person->getPhone();
		$xml .= '</PHONE>';
		$xml .= '<MOBILE>';
		$xml .= $person->getMobile();
		$xml .= '</MOBILE>';
		if ($person->getAddress() != null) {
			$xml .= $this->marshallAddress($person->getAddress());
		}
		if (is_array($person->getWebs())) {
			foreach($person->getWebs() as $web) {
				$xml .= '<WEB>';
				$xml .= $web;
				$xml .= '</WEB>';
			}
		}
		if (is_array($person->getSocials())) {
			foreach($person->getSocials() as $social) {
				$xml .= '<SOCIAL>';
				$xml .= $social;
				$xml .= '</SOCIAL>';
			}
		}
		$xml .= '</PERSON>';
		return $xml;
	}

}

?>