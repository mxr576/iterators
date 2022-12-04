<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\iterators;

use Generator;
use IteratorAggregate;

/**
 * @template TKey
 * @template T
 *
 * @implements IteratorAggregate<TKey, T>
 */
final class IterableIteratorAggregate implements IteratorAggregate
{
    /**
     * @param iterable<TKey, T> $iterable
     */
    public function __construct(private iterable $iterable)
    {
    }

    /**
     * @return Generator<TKey, T>
     */
    public function getIterator(): Generator
    {
        yield from $this->iterable;
    }
}
