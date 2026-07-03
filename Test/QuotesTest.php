<?php

require_once 'tests/units/Base.php';

use KanboardTests\units\Base;
use Kanboard\Plugin\HelloHarmozi\Model\Quotes;

class QuotesTest extends Base
{
    public function testAllReturnsManyNonEmptyStrings()
    {
        $all = Quotes::all();
        $this->assertGreaterThanOrEqual(15, count($all));
        foreach ($all as $q) {
            $this->assertIsString($q);
            $this->assertNotEmpty(trim($q));
        }
    }

    public function testRandomReturnsAKnownQuote()
    {
        $all = Quotes::all();
        for ($i = 0; $i < 20; $i++) {
            $this->assertContains(Quotes::random(), $all);
        }
    }
}
