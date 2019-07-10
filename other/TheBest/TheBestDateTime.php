<?php
namespace App\Date\TheBest;

use App\Date\BetterDateTime; // II sposób


//class TheBestDateTime extends App\Date\BetterDateTime { I sposób
class TheBestDateTime extends BetterDateTime { // II sposób (use)
    public function foo1() {
        echo 'foo1 from DateTime';
    }
}

