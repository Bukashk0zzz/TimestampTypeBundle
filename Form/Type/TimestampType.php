<?php

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
 * @author Denis Golubovskiy <bukashk0zzz@gmail.com>
 */
class TimestampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
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