<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug;

trait NameSlugTrait
{
    use NameTrait;

    #[ORM\Column(length: 255, unique: true)]
    #[Slug(fields: ['name'])]
    private string $slug;

    public function getSlug(): string
    {
        return $this->slug;
    }
}
