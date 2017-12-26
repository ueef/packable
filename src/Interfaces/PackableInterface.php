<?php

namespace Ueef\Packable\Interfaces {

    interface PackableInterface
    {
        public function pack(): array;
        public function unpack(array $packed);
    }
}