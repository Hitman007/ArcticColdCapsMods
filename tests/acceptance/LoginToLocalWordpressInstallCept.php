<?php

include 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('LoginToLocalWordpressInstall');
$I->loginWordpressAs('admin');
$I->see('Logoreno');

?> 