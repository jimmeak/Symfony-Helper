<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TextTrait
{
    #[ORM\Column(type: Types::TEXT)]
    private string $text;

    public function getDescription(): string
    {
        return $this->text;
    }

    public function setDescription(string $text): self
    {
        $this->text = $text;
        return $this;
    }
}
