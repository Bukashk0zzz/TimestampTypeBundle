<?php declare(strict_types = 1);

/*
 * This file is part of the Bukashk0zzzTimestampTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\TimestampTypeBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * Class TimestampToDateTimeTransformer
 */
class TimestampToDateTimeTransformer implements DataTransformerInterface
{
    /**
     * @param mixed $value
     *
     * @return int|mixed
     */
    public function transform($value)
    {
        if ($value instanceof \DateTime) {
            return $value->getTimestamp();
        }

        return $value;
    }

    /**
     * @param mixed $value
     *
     * @return \DateTime|null
     */
    public function reverseTransform($value): ?\DateTime
    {
        if ($value !== null && $value !== '' && \is_scalar($value)) {
            $date = new \DateTime();

            return $date->setTimestamp((int) $value);
        }

        return null;
    }
}
