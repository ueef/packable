<?php
declare(strict_types=1);

namespace Ueef\Packable\Packables;

trait DirectPackTrait
{
    public function pack(): array
    {
        return get_object_vars($this);
    }
}