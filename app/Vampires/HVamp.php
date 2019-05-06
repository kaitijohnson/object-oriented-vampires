<?php
namespace App\Vampires;

trait HVamp
{
  public $vStatus = false;

  public function setVStatus(bool $newVStatus)
  {
    $this->vStatus = $newVStatus;
  }

  public function getVStatus()
  {
    return ($this->vStatus) ? "This vampire is infected." : "This vampire is not infected.";
  }
}

?>
