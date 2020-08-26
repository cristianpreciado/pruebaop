<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseOneTest
 * desde la raiz del proyecto
 */
class ExerciseOne
{
    // TODO: Considera el siguiente código, devuelve las frases según sea el caso:
    
	/**
     * Phrase contains another phrase validation method
     * @param string $str1
     * @param string $str2
     * @return string
     */
    public function solution($str1, $str2)
    {
        if () {
			return "\"" . $str1 . "\" contiene \"" . $str2 . "\"";
        } else {
			return "\"" . $str1 . "\" no contiene \"" . $str2 . "\"";
        }
    }
}

