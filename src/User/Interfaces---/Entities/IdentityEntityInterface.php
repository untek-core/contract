<?php

namespace Untek\Core\Contract\User\Interfaces\Entities;

use Symfony\Component\Security\Core\User\UserInterface;
use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Интерфейс сущности аккаунта пользователя
 * @todo Перенести в
 */
interface IdentityEntityInterface extends UserInterface
{

    /**
     * ФИО или логин пользователя
     * @return string
     */
    public function getUsername(): string;

    /**
     * Сущность персоны
     * @return PersonEntityInterface|null
     */
    public function getPerson(): ?PersonEntityInterface;
}
