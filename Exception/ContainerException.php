<?php

/**
 * This file is part of the Vection package.
 *
 * (c) David M. Lung <vection@davidlung.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vection\Component\DependencyInjection\Exception;

use Psr\Container\ContainerExceptionInterface;

/**
 * Class ContainerException
 *
 * @package Vection\Component\DependencyInjection\Exception
 *
 * @author  David M. Lung <vection@davidlung.de>
 */
class ContainerException extends RuntimeException implements ContainerExceptionInterface
{

}
