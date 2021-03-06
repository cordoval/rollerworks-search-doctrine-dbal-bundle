<?php

/*
 * This file is part of the RollerworksSearch package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Bundle\SearchDoctrineDbalBundle;

use Rollerworks\Bundle\SearchDoctrineDbalBundle\DependencyInjection\DependencyInjectionExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RollerworksSearchDoctrineDbalBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new DependencyInjectionExtension();
        }

        return $this->extension;
    }
}
