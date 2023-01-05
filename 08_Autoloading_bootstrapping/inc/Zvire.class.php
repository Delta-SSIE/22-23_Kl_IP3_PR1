<?php

abstract class Zvire
{
    private static int $pocet = 0;

    public static function getPocet() : int {
        return self::$pocet;
    }

    private string $barva;

    public function __construct(string $barva = "bílá")
    {
        $this->setBarva($barva);
        self::$pocet++;
    }

    public function setBarva(string $barva): void
    {
        $this->barva = $barva;
    }

    public function zadupej(): string
    {
        return "Dupy dup";
    }

    public function predstavSe(): string
    {
        return "„Moje barva je {$this->barva}, dělám {$this->ozviSe()} a umím dupat: {$this->zadupej()}“";
    }

    public abstract function ozviSe(): string;

}