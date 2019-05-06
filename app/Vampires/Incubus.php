<?php
namespace App\Vampires;

class Incubus extends Vampire
{

  function __construct() {
    $this->setType("an Incubus");
    $this->setOrigin("Demon");
    $this->setSun("is unaffected");
    $this->setBlood("their victim's energy or life force");
    $this->setAccent("Italian");
    $this->setBat(false);
    $this->setSuperPowers(["Nightmares", "Paralysis"]);
  }
}
?>
