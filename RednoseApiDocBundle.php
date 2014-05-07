<?php

/*
 * This file is part of the RednoseApiDocBundle package.
 *
 * (c) RedNose <http://www.rednose.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rednose\ApiDocBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RednoseApiDocBundle extends Bundle
{
    public function getParent()
    {
        return 'NelmioApiDocBundle';
    }
}
