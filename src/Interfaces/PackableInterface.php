<?php
declare(strict_types=1);

namespace Ueef\Packable\Interfaces;

interface PackableInterface
{
    public function pack(): array;
    public static function unpack(array $packed): self;
}
