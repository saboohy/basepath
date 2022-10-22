<?php declare(strict_types=1);

namespace Saboohy\Basepath\Tests;

use PHPUnit\Framework\TestCase;

class GeneralTest extends TestCase
{
    /**
     * Setup
     * 
     * @return void
     */
    public function setUp() : void
    {
        $this->project_dir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;
    }
    /**
     * Testing function without argument
     * 
     * @return void
     */
    public function testProjectPath() : void
    {
        $project_path = realpath($this->project_dir);

        $this->assertTrue($project_path === basepath());
    }

    /**
     * Testing file directory in project
     * 
     * @return void
     */
    public function testFileDirInProject() : void
    {
        $file_dir = realpath($this->project_dir . DIRECTORY_SEPARATOR . "composer.json");

        $this->assertTrue(file_exists($file_dir));
    }
}