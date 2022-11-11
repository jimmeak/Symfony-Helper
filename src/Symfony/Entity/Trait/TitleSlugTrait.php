<?php

namespace Jimmeak\Symfony\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug;

trait TitleSlugTrait
{
    use TitleTrait;

    #[ORM\Column(length: 255, unique: true)]
    #[Slug(fields: ['title'])]
    private string $slug;

}
