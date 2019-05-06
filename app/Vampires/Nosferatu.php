<?php
namespace App\Vampires;

class Nosferatu extends Vampire implements HepV, BloodDrinker
{
  use HVamp, Sanguine;
  function __construct()
  {
    $this->setType("a Nosferatu");
    $this->setOrigin("Vampire blood");
    $this->setSun("burns");
    $this->setBlood("Humans, Supernatural Creatures");
    $this->setAccent("Eastern European");
    $this->setBat(true);
    $this->setSuperPowers(["Hypnosis"]);
  }
}
?>
