<?php
final class Krava extends Zvire
{
    private string $zvuk;

    public function __construct(string $barva, string $zvuk)
    {
        $this->zvuk = $zvuk;
        parent::__construct($barva);
    }

    public function ozviSe(): string
    {
        return $this->zvuk;
    }
}