<?php

declare(strict_types=1);

namespace PathLib;
use PHPUnit\Framework\TestCase;

class PathTest extends TestCase
{
    private $obj;

    public function setUp()
    {
    }

    public function testEmptyPath(): void
    {
        $path = new Path('');
        $path->cd('');
        $this->assertEquals('/', $path->currentPath);
    }

    public function testSamePath(): void
    {
        $path = new Path('/root/test');
        $path->cd('/root/test');
        $this->assertEquals('/root/test', $path->currentPath);
    }

    public function testOneLevelDown(): void
    {
        $path = new Path('/root/test');
        $path->cd('one');
        $this->assertEquals('/root/test/one', $path->currentPath);
    }

    public function testRootPath(): void
    {
        $path = new Path('/root/test');
        $path->cd('/');
        $this->assertEquals('/', $path->currentPath);
    }

    public function testInvalidPath(): void
    {
        $this->markTestSkipped('Since this library doesn\'t check the existence of a directory there\'s not much point in testing this case.');
    }

    public function testOneLevelUp(): void
    {
        $path = new Path('/root/test');
        $path->cd('../');
        $this->assertEquals('/root', $path->currentPath);
    }

    public function testTwoLevelsUp(): void
    {
        $path = new Path('/root/test');
        $path->cd('../../');
        $this->assertEquals('/', $path->currentPath);
    }

    public function testTooManyLevelsUp(): void
    {
        $path = new Path('/root/test');
        $path->cd('../../../../');
        $this->assertEquals('/', $path->currentPath);
    }
}
