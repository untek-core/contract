<?php

namespace Untek\Core\Contract\Arr\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Возможность преобразовать данные в массив.
 * 
 * Например, объект сущности может быть преобразован в массив
 */
interface ToArrayInterface
{

    /**
     * Преобразовать данные в массив
     * @return array
     */
    public function toArray(): array;
}
