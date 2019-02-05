<?php

class FizzbuzzTest extends \PHPUnit\Framework\TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Fizzbuzz();
    }

    /**
     * @test
     */
    public function oneMustReturnOne()
    {
        $this->assertEquals(1, $this->sut->convert(1));
    }

    /**
     * @test
     */
    public function threeMustReturnFizz()
    {
        $this->assertEquals('Fizz', $this->sut->convert(3));
    }

    /**
     * @test
     */
    public function fiveMustReturnBuzz()
    {
        $this->assertEquals('Buzz', $this->sut->convert(5));
    }

    /**
     * @test
     */
    public function fifteenMustReturnFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->sut->convert(15));
    }

    /**
     * @test
     */
    public function paramIsNegative()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->sut->convert(-1);
    }

    /**
     * @test
     */
    public function paramIsNotAInteger()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->sut->convert('23');
    }

    /**
     * @test
     */
    public function paramIsZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->sut->convert(0);
    }

//    /**
//     * @test
//     */
//    public function isMultipleOfThree()
//    {
//        $this->assertTrue($this->sut->isMultiple(3, 3));
//        $this->assertFalse($this->sut->isMultiple(1, 3));
//    }
//
//    /**
//     * @test
//     */
//    public function isMultipleOfFive()
//    {
//        $this->assertTrue($this->sut->isMultiple(10, 5));
//        $this->assertFalse($this->sut->isMultiple(7, 5));
//    }
//
//    /**
//     * @test
//     */
//    public function isMultipleOfFiveAndThree()
//    {
//        $this->assertTrue($this->sut->isMultiple(15, 15));
//        $this->assertFalse($this->sut->isMultiple(20, 15));
//    }

}
