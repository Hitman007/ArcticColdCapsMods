<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
	public function loginWordpressAs($role) {
		$this->amOnPage('http://localhost/wp-login.php');
		$this->see('Log In');
		if ($role == "admin"){
			$this->fillField('log', 'Hitman007');
			$this->fillField('pwd', 'Karlinski123$');
			$this->fillField('log', 'Hitman007');
			$this->click('Log In');
			$this->see('Howdy');
		}
	}
}