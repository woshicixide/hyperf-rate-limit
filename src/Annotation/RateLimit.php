<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\RateLimit\Annotation;

use Attribute;
use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class RateLimit extends AbstractAnnotation
{
    /**
     * @var int
     */
    public $create;

    /**
     * @var int
     */
    public $consume;

    /**
     * @var int|callable
     */
    public $capacity;

    /**
     * @var null|callable
     */
    public $limitCallback;

    /**
     * @var callable|string
     */
    public $key;

    /**
     * @var int
     */
    public $waitTimeout;
}
