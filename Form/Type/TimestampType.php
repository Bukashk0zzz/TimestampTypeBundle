<?php declare(strict_types = 1);
/*
 * This file is part of the Bukashk0zzzTimestampTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\TimestampTypeBundle\Form\Type;

use Bukashk0zzz\TimestampTypeBundle\Form\DataTransformer\TimestampToDateTimeTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class TimestampType
 */
class TimestampType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param mixed[]              $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->addModelTransformer(new TimestampToDateTimeTransformer());
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return IntegerType::class;
    }
}
