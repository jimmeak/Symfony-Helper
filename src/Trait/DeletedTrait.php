<?php

namespace Jimmeak\Doctrine\Trait;

use Doctrine\ORM\Mapping as ORM;

trait DeletedTrait
{
    #[ORM\Column(options: ['default' => false])]
    private bool $deleted = false;

    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted = true): self
    {
        $this->deleted = $deleted;
        return $this;
    }
}
