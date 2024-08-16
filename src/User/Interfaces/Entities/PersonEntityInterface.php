<?php

namespace Untek\Core\Contract\User\Interfaces\Entities;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Интерфейс сущности персоны пользователя
 */
interface PersonEntityInterface
{

    /**
     * ФИО пользователя
     * @return string
     */
    public function getTitle(): string;
}
