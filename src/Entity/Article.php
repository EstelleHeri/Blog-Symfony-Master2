<?php
/**
 * Created by IntelliJ IDEA.
 * User: Estel
 * Date: 12/01/2019
 * Time: 15:03
 */

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Event\LifecycleEventArgs;

class Article
{
    private $id;
    private $title;
    private $createdAt;
    private $updateAt;
    private $description;
    private $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdateAt(): ?DateTime
    {
        return $this->updateAt;
    }

    public function setCreatedAtValue(LifecycleEventArgs $event)
    {
        $this->createdAt = new DateTime();
    }

    public function setUpdateAtValue(LifecycleEventArgs $event)
    {
        $this->updateAt = new DateTime();
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }
}