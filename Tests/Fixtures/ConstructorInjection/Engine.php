<?php

/**
 * This file is part of the Vection-Framework project.
 * Visit project at https://github.com/Vection-Framework/Vection
 *
 * (c) Vection-Framework <vection@appsdock.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vection\Component\DependencyInjection\Tests\Fixtures\ConstructorInjection;

use Vection\Component\DependencyInjection\Tests\Fixtures\Factory\Fuel;

/**
 * Class CarEngine
 *
 * @package Vection\Component\DependencyInjection\Tests\Fixtures\ConstructorInjection
 * @author  David Lung <david.lung@appsdock.de>
 */
class Engine
{
    protected Fuel $fuel;

    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }
}
