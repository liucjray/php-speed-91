<?php

namespace App;

class Tennis
{

    private $firstPlayerScoreTimes;
    private $scoreLookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
    ];

    public function score(): string
    {
        if ($this->firstPlayerScoreTimes == 1 || $this->firstPlayerScoreTimes == 2) {
            return $this->scoreLookup[$this->firstPlayerScoreTimes] . ' Love';
        }

        return 'Love All';
    }

    public function firstPlayerScore()
    {
        $this->firstPlayerScoreTimes++;
    }
}