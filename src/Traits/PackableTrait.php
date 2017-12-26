<?php

namespace Ueef\Packable\Traits {

    trait PackableTrait
    {
        public function pack(): array
        {
            return get_object_vars($this);
        }

        public function unpack(array $packed)
        {
            foreach ($packed as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }
}
