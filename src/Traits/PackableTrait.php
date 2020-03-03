<?php

declare(strict_types=1);

namespace Ueef\Packable\Traits;

use Exception;
use Ueef\Packable\Interfaces\PackableInterface;

trait PackableTrait
{
    public static function unpack(array $packed, ?PackableInterface $item = null): PackableInterface
    {
        if (null === $item) {
            $item = new static;
        } elseif (!$item instanceof static) {
            throw new Exception(sprintf("the item must be compatible with %s", static::class));
        }

        foreach ($packed as $key => $value) {
            if (property_exists($item, $key)) {
                $item->{$key} = $value;
            }
        }

        return $item;
    }

    public function pack(): array
    {
        $packed = get_object_vars($this);
        foreach ($packed as &$v) {
            if ($v instanceof PackableInterface) {
                $v = $v->pack();
            }
        }

        return $packed;
    }
}