<?php


class Player
{
    protected $name;

    protected $score;

    /**
     * Player constructor.
     * @param $name
     * @param $score
     */
    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function winpoint()
    {
        $this->score = "15";
    }

    public function score(){
        return $this->score;
    }



}