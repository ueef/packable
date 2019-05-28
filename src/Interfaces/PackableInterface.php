<?php
declare(strict_types=1);

namespace Ueef\Packable\Interfaces;

interface PackableInterface
{
    public function pack(): array;

    /**
     * @return PackableInterface
     */
    public static function unpack(array $values);
}
