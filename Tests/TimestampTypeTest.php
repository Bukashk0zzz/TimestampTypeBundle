<?php

/*
 * This file is part of the Bukashk0zzzTimestampTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\TimestampTypeBundle\Tests;

use Bukashk0zzz\TimestampTypeBundle\Form\Type\TimestampType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Test\TypeTestCase;

/**
 * Test the TimestampTypeTest
 *
 * @author Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 */
class TimestampTypeTest extends TypeTestCase
{
    /**
     * @var int
     */
    protected $time = 641073600;

    /**
     * @test
     */
    public function testType()
    {
        /** @var Form $form */
        $form = $this->factory->create(TimestampType::class, new \DateTime(), ['data_class' => null]);
        $form->submit($this->time);
        $this->assertForm($form);

        $form = $this->factory->create(TimestampType::class);
        $form->submit($this->time);
        $this->assertForm($form);
    }

    private function assertForm(Form $form) {
        static::assertTrue($form->isSynchronized());
        static::assertSame((string) $this->time, $form->getViewData());
    }
}
