<?php

declare(strict_types=1);

namespace Symplify\EasyCI\Tests\Analyzer\MissingClassStaticCallLatteAnalyzer\Source;

final class ExistingClassStaticCall
{
    public static function existingCall(?string $value = null): void
    {
    }
}
