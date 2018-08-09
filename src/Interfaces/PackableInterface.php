<?php
declare(strict_types=1);

namespace Ueef\Packable\Interfaces;

use Ueef\Assignable\Interfaces\AssignableInterface;

interface PackableInterface extends AssignableInterface
{
    public function pack(): array;
}
