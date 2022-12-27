<?php

namespace Jimmeak\Symfony\Entity\Trait;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait PublishedAtNullTrait
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, nullable: true, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private DateTimeImmutable|null $publishedAt;

    public function getPublishedAt(): DateTimeImmutable|null
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(DateTimeImmutable|null $publishedAt): static
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }
}
