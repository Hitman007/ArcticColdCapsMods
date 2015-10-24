<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
	public function loginWordpressAs($role) {
		$I = $this;
		$I->amOnPage('http://localhost/wp-login.php');
		$I->see('Log In');
		switch ($role) {
			case "admin":
				$I->fillField('log', 'Hitman007');
				$I->fillField('pwd', 'Karlinski123$');
				$I->fillField('log', 'Hitman007');
				$I->click('Log In');
				$I->see('Howdy, Hitman007');
				break;
			default:
				throw new \Exception('login role not recognized');
				break;
		}
	}
}