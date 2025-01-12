<?php

declare(strict_types=1);

namespace Wrkflow\GetValue\Contracts;

use Exception;

interface ExceptionBuilderContract
{
    public function missingValue(string $key): Exception;

    public function arrayIsEmpty(string $key): Exception;

    public function notAnArray(string $key): Exception;
}
