<?php
namespace App\Vampires;

class Daywalker extends Vampire
{

  function __construct() {
    $this->setType("a Daywalker");
    $this->setOrigin("magic probably??");
    $this->setSun("sparkles");
    $this->setBlood("Humans, Animals");
    $this->setAccent("None");
    $this->setBat(false);
    $this->setSuperPowers(["Clairvoyance", "Precognition"]);
  }
}
?>
