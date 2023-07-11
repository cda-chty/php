<?php

namespace App;

class Cat
{
    private string $name;
    private string $type = 'Chat de gouttière';
    private string $fur;
    public static int $count = 0;

    public static function getCount(): int
    {
        return self::$count;
    }

    public function __construct(string $name, string $type = 'Chat de gouttière')
    {
        $this->name = $name;
        $this->type = $type;
        self::$count++;
    }

    public static function garfield(): Cat
    {
        return new Cat('Garfield', 'Gros chat');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setFur(string $fur): self
    {
        $this->fur = $fur;

        return $this;
    }

    public function cry(): string
    {
        return $this->name.' miaule';
    }

    public function playWith(Cat $otherCat): string
    {
        return $this->name.' joue avec '.$otherCat->name;
    }
}
