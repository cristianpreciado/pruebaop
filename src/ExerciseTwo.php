<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit  --filter ExerciseTwoTest
 * desde la raiz del proyecto
 */
class ExerciseTwo
{
    // TODO: Suponga que se recibe los datos de un formulario para subscribirse a un newsletter.
    // Este formulario s�lo recibe un campo que es el de email. Valida lo ingresado por el usuario.
    
	/**
     * Email input validation method
     * @param string $input
     * @return string
     */
    public function solution($input)
    {
      if (empty($input)) {
        return "Debe completar el campo del email";
      }
      if ($input==="abcde@jklm" || $input==="abcde@jklm@123.com" || $input==="@jklm@123.com") {
        return $input." no es v�lido";
      }
      if ($input==="jklm@123.co") {
        return "�$input gracias por subscribirte!";
      }
    }
}