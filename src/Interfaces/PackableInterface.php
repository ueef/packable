<?php
declare(strict_types=1);

namespace Ueef\Packable\Interfaces;

interface PackableInterface
{
    public function pack(): array;

    /**
     * @param array $packed
     * @return PackableInterface
     */
    public static function unpack(array $packed);
}
