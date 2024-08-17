<?php

namespace Untek\Core\Contract\Rbac\Traits;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Наследование всех CRUD-полномочий в общее полномочие
 * 
 * Используется для компактности и лаконичности
 */
trait CrudRbacInheritanceTrait
{

    /**
     * @inheritdoc
     */
    public static function getInheritance()
    {
        return [
            self::CRUD => [
                self::ALL,
                self::ONE,
                self::CREATE,
                self::UPDATE ,
                self::DELETE,
//                self::RESTORE,
            ],
        ];
    }
}
