<?php declare(strict_types=1);
namespace Shapes\Test\Unit;

use PHPUnit\Framework\TestCase;
use Shapes\Rectangle;
use Shapes\ShapeProperties;
use TypeError;

class RectangleTest extends TestCase
{
    /**
     * @test
     */
    public function create_withValidParameters_returnsCorrectInstance()
    {
        $shape = new Rectangle(1.5, 2.5);

        $this->assertInstanceOf(Rectangle::class, $shape);
    }

    /**
     * @test
     */
    public function create_withInvalidParameters_throwsTypeError()
    {
        $this->expectException(TypeError::class);
        $this->expectExceptionMessage('Argument #1 ($width) must be of type float, string given');

        $shape = new Rectangle("1.5", "2.5");

        $this->assertNull($shape);
    }

    /**
     * @test
     */
    public function getName_whenNoNameWasSet_returnsNull()
    {
        $shape = new Rectangle(1.5, 2.5);

        $this->assertNull($shape->getName());
    }

    /**
     * @test
     */
    public function getName_whenNameWasSet_returnsName()
    {
        $name = 'Test';

        $shape = (new Rectangle(1.5, 2.5))
            ->setName($name);

        $this->assertEquals($name, $shape->getName());
    }

    /**
     * @test
     */
    public function getProperties_returnsPropertiesObject()
    {
        $shape = (new Rectangle(1.5, 2.5))
            ->setName('Test');

        $expectedProperties = (new ShapeProperties('id', 'Test'))
            ->setWidth(1.5)
            ->setLength(2.5)
            ->setName('Test');

        $shapeProperties = $shape->getProperties();

        $this->assertEquals($expectedProperties->getName(), $shapeProperties->getName());
        $this->assertEquals($expectedProperties->getWidth(), $shapeProperties->getWidth());
        $this->assertEquals($expectedProperties->getLength(), $shapeProperties->getLength());
        $this->assertNotNull($shapeProperties->getId());
        $this->assertNull($shapeProperties->getRadius());
    }

    /**
     * @test
     */
    public function getShapeType_returnsCorrectType()
    {
        $this->assertEquals(2, Rectangle::getShapeType());
    }

    /**
     * @test
     */
    public function getArea_returnsCorrectShapeArea()
    {
        $shape = new Rectangle(1.5, 2.5);

        $this->assertEquals(3.75, $shape->getArea());
    }
}