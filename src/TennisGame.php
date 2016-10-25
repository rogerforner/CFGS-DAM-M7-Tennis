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
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }


    public function score()
    {
        if($this->tie()){
            $diferencia = $this->player1->points() - $this->player2->points();
            if ($diferencia > 0){
                return "Avantatge " . $this->player1->name();
            }
            if ($diferencia == 0){
                return "Iguals";
            }
            if ($diferencia < 0){
                return "Avantatge " . $this->player2->name();
            }
        }

        if($this->player1->score() == $this->player2->score()){
            return $this->player1->score() . " iguals";
        }
        return $this->player1->score() . " - " . $this->player2->score();


    }

    /**
     * @return bool
     */
    public function tie()
    {
        return $this->player1->points() > 3 || $this->player2->points() > 3;
    }
}
