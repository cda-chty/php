<?php

namespace App\Legacy;

interface Feline
{
    public function climbsOnRoof(): string;
    public function scratch(Animal $animal): string;
}
