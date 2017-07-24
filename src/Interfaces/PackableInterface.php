<?php

namespace Ueef\Packable\Interfaces {

    interface PackableInterface
    {
        public function pack(): array;
        public static function unpack(array $packed): self;
    }
}