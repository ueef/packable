<?php
declare(strict_types=1);

namespace Ueef\Packable\Traits;

use Ueef\Assignable\Traits\AssignableTrait;

trait PackableTrait
{
    use AssignableTrait;

    public function pack(): array
    {
        return get_object_vars($this);
    }
}
