<?php

namespace Untek\Core\Contract\Common\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

interface GetNameInterface
{

    public function getName();

}