<?php

namespace Marcell\ComposerElso;

use Marcell\ComposerElso\Animals\Tiger;

class User {

    public function kiir() {
        echo "Hello User!\n";
    }

    public function newPet() : Tiger {
    return new Tiger();
    }

}