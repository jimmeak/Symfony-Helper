<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AnnotationTrait
{
    #[ORM\Column(type: Types::TEXT)]
    private string $annotation;

    public function getDescription(): string
    {
        return $this->annotation;
    }

    public function setDescription(string $annotation): self
    {
        $this->annotation = $annotation;
        return $this;
    }
}
