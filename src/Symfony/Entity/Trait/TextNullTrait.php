<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TextNullTrait
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private string $text;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }
}
