<?php

class TennisGame
{


    protected $player1;
    protected $player2;

    /**
     * TennisGame constructor.
     * @param $player1
     * @param $player2
     */
    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }


    public function score()
    {
        if($this->player1->score() == $this->player2->score()){
            return $this->player1->score() . " iguals";
        }
        return $this->player1->score() . " - " . $this->player2->score();


    }
}
