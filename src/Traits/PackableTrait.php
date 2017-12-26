<?php

namespace Ueef\Packable\Traits {

    trait PackableTrait
    {
        public function pack(): array
        {
            return get_object_vars($this);
        }
    }
}
