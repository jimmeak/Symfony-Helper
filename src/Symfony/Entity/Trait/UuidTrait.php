<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV4;

trait UuidTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private UuidV4 $id;

    public function getId(): UuidV4
    {
        return $this->id;
    }

    public function setId(UuidV4 $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function refreshId(): static
    {
        $this->id = Uuid::v4();
        return $this;
    }
}
