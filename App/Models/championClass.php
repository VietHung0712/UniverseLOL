<?php

namespace UniverseLOL;

class Champion
{
    private $id;
    private $name;
    private $region;
    private $role;
    private $title;
    private $voice;
    private $story;
    private $splashArt;
    private $animatedSplashArt;
    private $positionX;
    private $positionY;

    public function __construct($id, $name, $region, $role, $title, $voice, $story, $splashArt, $animatedSplashArt, $positionX, $positionY)
    {
        $this->id = $id;
        $this->name = $name;
        $this->region = $region;
        $this->role = $role;
        $this->title = $title;
        $this->voice = $voice;
        $this->story = $story;
        $this->splashArt = $splashArt;
        $this->animatedSplashArt = $animatedSplashArt;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getVoice()
    {
        return $this->voice;
    }
    public function getStory()
    {
        return $this->story;
    }
    public function getSplashArt()
    {
        return $this->splashArt;
    }
    public function getAnimatedSplashArt()
    {
        return $this->animatedSplashArt;
    }
    public function getPositionX()
    {
        return $this->positionX;
    }
    public function getPositionY()
    {
        return $this->positionY;
    }
}
