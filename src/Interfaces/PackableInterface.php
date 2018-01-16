<?php

namespace Ueef\Packable\Interfaces {

    interface PackableInterface
    {
        /**
         * @return array
         */
        public function pack();

        /**
         * @param array $packed
         * @return mixed
         */
        public function unpack($packed);
    }
}