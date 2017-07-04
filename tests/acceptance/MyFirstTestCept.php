<?php 
$i = new AcceptanceTester($scenario);
$i->wantTo('Open the root web page and see that says hello');
$i->amOnPage('/');
$i->see('Hello World!');