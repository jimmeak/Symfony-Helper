<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV7;

trait UuidTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private UuidV7 $id;

    public function getId(): UuidV7
    {
        return $this->id;
    }

    public function setId(UuidV7 $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function refreshId(): static
    {
        $this->id = Uuid::v7();
        return $this;
    }
}
