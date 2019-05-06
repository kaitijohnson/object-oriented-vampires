From mtg 5/6:
passing props from controller to component
Routes

Next week:

from Noferatu.php:
<?php include("hepV.php"); ?>
<?php include("hVamp.php"); ?>
<?php include("sanguine.php"); ?>
<?php include("bloodDrinker.php"); ?>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Vampires
        </div>


                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div><br><br>

$blade = new Daywalker;
$bilquis = new Incubus;

$blade->setName("Blade");
$blade->setSun("feels no affect");
$blade->setAccent("no");

$bilquis->setName("Bilquis");
$bilquis->setOrigin("being a god");
$bilquis->setSun("feels no affect");
$bilquis->setAccent("no");

echo $blade->getName() . $blade->getType() . $blade->getOrigin() . $blade->getSun() . $blade->getAccent() . $blade->getSuperPowers() . "\n\n";

echo $bilquis->getName() . $bilquis->getType() . $bilquis->getOrigin() . $bilquis->getSun() . $bilquis->getAccent() . $bilquis->getSuperPowers() . "\n\n";




  $ericNorthman = new Nosferatu;

  $ericNorthman->setName("Eric Northman");
  $ericNorthman->setSuperPowers(["flying", "just, like, being cool"]);
  $ericNorthman->setAccent("a Louisiana");
  $ericNorthman->setVStatus(true);

  echo $ericNorthman->getName() . $ericNorthman->getType() . $ericNorthman->getOrigin() . $ericNorthman->getSun() . $ericNorthman->getBloodDrinker() . $ericNorthman->getAccent() . $ericNorthman->getSuperPowers() . $ericNorthman->getVStatus() . "\n\n";
