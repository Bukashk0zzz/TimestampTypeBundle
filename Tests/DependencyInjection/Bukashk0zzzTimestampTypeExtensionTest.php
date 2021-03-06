<?php declare(strict_types = 1);

/*
 * This file is part of the Bukashk0zzzTimestampTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\TimestampTypeBundle\Tests\DependencyInjection;

use Bukashk0zzz\TimestampTypeBundle\DependencyInjection\Bukashk0zzzTimestampTypeExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Bukashk0zzzTimestampTypeExtensionTest
 */
class Bukashk0zzzTimestampTypeExtensionTest extends TestCase
{
    /**
     * @var Bukashk0zzzTimestampTypeExtension Bukashk0zzzTimestampTypeExtension
     */
    private $extension;

    /**
     * @var ContainerBuilder Container builder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->extension = new Bukashk0zzzTimestampTypeExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    /**
     * Test load extension
     */
    public function testLoadExtension(): void
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        // Check that services have been loaded
        static::assertTrue($this->container->has('timestamp.type'));
    }
}
