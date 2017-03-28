<?php

namespace ArrayPermutations;

/**
 * Generator for all array permutations
 *
 * @package ArrayPermutations
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class Generator
{
    /**
     * Generate all permutations
     *
     * @return \Generator
     */
    public function generate(array $original)
    {
        foreach ($original as $key => $firstItem) {
            $remaining = $original;

            array_splice($remaining, $key, 1);

            if (count($remaining) === 0) {
                yield [$firstItem];

                continue;
            }

            foreach ($this->generate($remaining) as $permutation) {
                array_unshift($permutation, $firstItem);

                yield $permutation;
            }
        }
    }
}
