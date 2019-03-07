<?php
declare(strict_types=1);

namespace Ueef\Packable\Packables;

trait PackableAssignUnpackTrait
{
    /**
     * @param array $values
     * @return static
     */
    public function unpack(array $values)
    {
        $item = (new static);
        foreach ($values as $key => $value) {
            $this->assign($key, $value);
        }

        return $item;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return static
     */
    abstract protected function assign(string $key, $value);
}