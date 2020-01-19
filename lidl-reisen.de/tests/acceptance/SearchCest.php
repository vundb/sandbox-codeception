<?php

class SearchCest
{
    public function _before(AcceptanceTester $I)
    { }

    // tests
    public function tryToSearch(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField(['name' => 'query'], 'Dresden');
        $I->click('Los');
        $I->sleep(2);
        $I->canSee('Dresden', 'div.breadcrumb ul li.bc-current a span');
    }
}
