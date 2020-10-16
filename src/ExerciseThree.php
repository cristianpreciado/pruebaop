<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseThreeTest
 * desde la raiz del proyecto
 */
class ExerciseThree
{
    // TODO: Crea una clase que maneje un juego, 
    // donde se deben atrapar una serie de enemigos para subir de nivel.
    // Cada cierta cantidad de enemigos atrapados har� que el jugador suba de nivel.
    // Cada vez que el jugador comience una partida, su nivel se reiniciar�.
    // Se debe poder obtener el nivel en el que se encuentra el jugador.
    var $level=0;
    var $levelEnemy;
    var $numberCatchEnemy=0;
    function __construct($levelEnemy)
    {
        $this->levelEnemy = $levelEnemy;
    }
    public function catchEnemy()
    {
        $this->numberCatchEnemy++;
        if ($this->levelEnemy == $this->numberCatchEnemy || $this->levelEnemy == $this->numberCatchEnemy/$this->levelEnemy) {
            $this->level++;
        }
    }

    public function getLevel()
    {
        return $this->level;
    }
}