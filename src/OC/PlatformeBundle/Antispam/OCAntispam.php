<?php
// src/OC/PlatformeBundle/Antispam/OCAntispam.php

namespace OC\PlatformeBundle\Antispam;

class OCAntispam
{
    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < 50;
    }
}