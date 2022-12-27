<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait LastNameNullTrait
{
    #[ORM\Column(length: 255, nullable: true)]
    private string|null $lastName;

    public function getLastName(): string|null
    {
        return $this->lastName;
    }

    public function setLastName(string|null $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }
}
