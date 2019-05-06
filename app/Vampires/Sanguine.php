<?php
namespace App\Vampires;

trait Sanguine
{
  public $bloodDrinker = true;

  public function setBloodDrinker(bool $newBloodDrinker)
  {
    $this->blood = $newBloodDrinker;
  }

  public function getBloodDrinker()
  {
    return ($this->bloodDrinker) ? "This vampire feeds off the blood of " . $this->blood : "This vampire does not drink blood, and instead consumes " . $this->blood;
  }
}

?>
