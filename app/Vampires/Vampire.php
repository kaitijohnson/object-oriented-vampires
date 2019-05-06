<?php
namespace App\Vampires;

abstract class Vampire
{
  private $name;
  private $type;
  private $origin;
  private $sun;
  protected $blood;
  private $accent;
  private $bat;
  private $superPowers = [];


  public function __construct ($vampireOrigin, $vampireSun, $vampireBlood, $vampireAccent, $vampireSuperPowers)
  {
    $this->origin = $vampireOrigin;
    $this->sun = $vampireSun;
    $this->blood = $vampireBlood;
    $this->accent = $vampireAccent;
    $this->superPowers = $vampireSuperPowers;
  }

  public function setName($newName)
  {
		 	 $this->name = $newName;
	}
  public function getName()
  {
    return $this->name;
  }

  public function setType($newType)
  {
		 	 $this->type = $newType;
	}
  public function getType()
  {
    return " is " . $this->type . " vampire";
  }

  public function setOrigin($newOrigin)
  {
		 	 $this->origin = $newOrigin;
	}
  public function getOrigin()
  {
    return ", and became a vampire by " . $this->origin . ". ";
  }

  public function setSun($newSun)
  {
		 	 $this->sun = $newSun;
	}
  public function getSun()
  {
    return "In the sunlight, " . $this->getName() . " " . $this->sun . ". ";
  }

  public function setBlood($newBlood)
  {
		 	 $this->blood = $newBlood;
	}
  public function getBlood()
  {
    return $this->blood;
  }

  public function setAccent($newAccent)
  {
    $newAccent = (false) ? "no" : $this->accent = $newAccent;
	}
  public function getAccent(){
    return ", and speaks with " . $this->accent . " accent. ";
  }

  public function setSuperPowers(array $newSuperPowers)
  {
    foreach($newSuperPowers as $power) {
        $this->superPowers[] = $power;
    }

	}
  public function getSuperPowers(){
    $superPowersList = implode(", ", $this->superPowers);
    return $this->name . "'s super powers include: " . $superPowersList . ". ";
  }

  public function setBat(bool $newBat)
  {
    $this->bat = $newBat;
  }
  public function getBat(){
    return $this->bat;
  }

}
 ?>
