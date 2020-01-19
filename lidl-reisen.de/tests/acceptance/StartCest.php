<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    { }

    public function checkFrontpage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Lidl-Reisen.de');
    }
}
