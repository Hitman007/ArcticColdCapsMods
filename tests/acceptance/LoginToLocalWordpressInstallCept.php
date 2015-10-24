<?php

include 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Login to Wordpress on \localhost as an admin');
$I->loginWordpressAs('admin');
//$I->see('Log In');

?> 