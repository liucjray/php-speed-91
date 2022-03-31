<?php

namespace Tests;

use App\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    private $tennis;

    function test_Love_All()
    {
        $this->scoreShouldBe('Love All');
    }

    function test_Fifteen_Love()
    {
        $this->tennis->firstPlayerScore();
        $this->scoreShouldBe('Fifteen Love');
    }

    function test_Thirty_Love()
    {
        $this->givenFirstPlayerScore(2);
        $this->scoreShouldBe('Thirty Love');
    }

    /**
     * @param $expected
     * @return void
     */
    public function scoreShouldBe($expected): void
    {
        $score = $this->tennis->score();
        $this->assertEquals($expected, $score);
    }

    /**
     * @param $times
     * @return void
     */
    public function givenFirstPlayerScore($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->tennis->firstPlayerScore();
        }
    }

    protected function setUp()
    {
        $this->tennis = new Tennis();
    }
}
