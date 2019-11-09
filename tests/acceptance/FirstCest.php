<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    { }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('WRITE A POST');
    }

    public function writePostWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('WRITE A POST');
        $I->wait(1);
        $I->see('Welcome to DEV');
     }
}
