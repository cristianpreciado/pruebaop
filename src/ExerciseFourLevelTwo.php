<?php
namespace src;
require_once("ExerciseFour.php");

use src\ExerciseFour;

class ExerciseFourLevelTwo implements ExerciseFour
{
    public function pointCalculator($points, $user_level=ExerciseFour::GOLD) : int
    {
        return $points * $user_level;
    }
}