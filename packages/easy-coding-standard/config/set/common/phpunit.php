<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(PhpUnitTestAnnotationFixer::class);
    $ecsConfig->rule(PhpUnitSetUpTearDownVisibilityFixer::class);
};
