<?php
namespace src;
require_once("ExerciseFour.php");

use src\ExerciseFour;

class ExerciseFourLevelOne implements ExerciseFour
{
    public function pointCalculator($points, $user_level=ExerciseFour::SILVER) : int
    {
        return $points * $user_level;
    }
}