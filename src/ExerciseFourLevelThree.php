<?php
namespace src;
require_once("ExerciseFour.php");

use src\ExerciseFour;

class ExerciseFourLevelThree implements ExerciseFour
{
    public function pointCalculator($points,$user_level=ExerciseFour::PLATINUM) : int
    {
        return $points * $user_level;
    }
}