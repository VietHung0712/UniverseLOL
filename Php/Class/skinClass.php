<?php

namespace UniverseLOL;

class Skin
{
    private $id;
    private $champion;
    private $name;
    private $splashArt;

    public function __construct($id, $champion, $name, $splashArt)
    {
        $this->id = $id;
        $this->champion = $champion;
        $this->name = $name;
        $this->splashArt = $splashArt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getChampion()
    {
        return $this->champion;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSplashArt()
    {
        return $this->splashArt;
    }

}
