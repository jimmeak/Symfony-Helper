<?php

namespace Jimmeak\Doctrine\Trait;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait UpdatedAtTrait
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    #[Gedmo\Timestampable(on: 'update')]
    private DateTimeImmutable $updatedAt;
}
