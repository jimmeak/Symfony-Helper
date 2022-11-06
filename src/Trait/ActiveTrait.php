<?php

namespace Jimmeak\Doctrine\Trait;

use Doctrine\ORM\Mapping as ORM;

trait ActiveTrait
{
    #[ORM\Column(options: ['default' => true])]
    private bool $active = true;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active = true): self
    {
        $this->active = $active;
        return $this;
    }


}
