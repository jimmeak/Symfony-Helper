<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AnnotationNullTrait
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private string $annotation;

    public function getAnnotation(): string
    {
        return $this->annotation;
    }

    public function setAnnotation(string $annotation): static
    {
        $this->annotation = $annotation;
        return $this;
    }
}
