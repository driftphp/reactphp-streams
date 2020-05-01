<?php

/*
 * This file is part of the Drift Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace React\Tests\Stream\Stub;

use React\Stream\TransformerStream;

class TransformerStreamStub extends TransformerStream
{
    public function write($data)
    {
        $this->output->write('>'.$data.'<');
    }
}
