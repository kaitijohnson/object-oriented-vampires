<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vampires\Nosferatu;

class WelcomeController extends Controller
{
    public function index()
    {
      $ericNorthman = new Nosferatu;

      $ericNorthman->setName("Eric Northman");
      $ericNorthman->setSuperPowers(["flying", "just, like, being cool"]);
      $ericNorthman->setAccent("a Louisiana");
      $ericNorthman->setVStatus(true);

      $eric = $ericNorthman->getName() . $ericNorthman->getType() . $ericNorthman->getOrigin() . $ericNorthman->getSun() . $ericNorthman->getBloodDrinker() . $ericNorthman->getAccent() . $ericNorthman->getSuperPowers() . $ericNorthman->getVStatus() . "\n\n";

      return view('welcome')->with('vampire', $eric);
    }
}
