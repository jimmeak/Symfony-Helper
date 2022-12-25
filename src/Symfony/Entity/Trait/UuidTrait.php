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
    private UuidV4 $uuid;

    public function getId(): UuidV4
    {
        return $this->uuid;
    }

    public function setId(UuidV4 $uuid): static
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function refreshUuid(): static
    {
        $this->uuid = Uuid::v4();
        return $this;
    }
}
