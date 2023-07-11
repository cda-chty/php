<?php

namespace App\Legacy;

class Kennel
{
    /**
     * @var array<Animal>
     */
    private array $animals = [];

    public function keep(Animal $animal): self
    {
        $this->animals[] = $animal;

        return $this;
    }

    public function out(): void
    {
        foreach ($this->animals as $animal) {
            echo $animal->move().'<br>';
        }
    }
}
