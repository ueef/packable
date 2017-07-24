<?php

namespace Ueef\Packable\Traits {

    use Ueef\Assignable\Traits\AssignableTrait;

    trait PackableTrait
    {
        use AssignableTrait;

        /**
         * @var array
         */
        protected static $packable_properties = [];


        public function pack(): array
        {
            if (!static::$packable_properties) {
                $values = [];
                foreach (static::$packable_properties as $property) {
                    $values[$property] = $this->{$property};
                }
            } else {
                $values = get_object_vars($this);
            }

            return $values;
        }

        public static function unpack(array $packed, ?self $self = null): self
        {
            if (!$self) {
                $self = new static;
            }

            $self->assign($packed);

            return $self;
        }
    }
}
