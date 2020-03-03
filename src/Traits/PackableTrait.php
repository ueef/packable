<?php

declare(strict_types=1);

namespace Ueef\Packable\Traits;

use Ueef\Packable\Interfaces\PackableInterface;

trait PackableTrait
{
    public static function unpack(array $packed): PackableInterface
    {
        $item = new static();
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