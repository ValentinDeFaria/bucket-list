<?php

namespace App\Services;

class Censurator
{
    private array $insultes;

    private array $censure;

    public function __construct()
    {
    }

    public function purify($wishes)
    {
        $insultes = ['pipi', 'caca', 'pute'];
        $censure = ['****', '****', '****'];
        foreach ($wishes as $wish) {
            $phrase = $wish->getDescription();
            $phrase = str_replace($insultes, $censure, $phrase);
            $wish->setDescription($phrase);
        }
    }
}
