<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait FirstNameNullTrait
{
    #[ORM\Column(length: 255, nullable: true)]
    private string|null $firstName;

    public function getFirstName(): string|null
    {
        return $this->firstName;
    }

    public function setFirstName(string|null $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }
}
