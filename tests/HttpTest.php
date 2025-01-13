<?php

use Liopoos\HttpCode\Http;
use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
    /**
     * Test isSuccessful
     * @return void
     */
    public function testIsSuccessful()
    {
        $successfulCodes = [
            200,
            201,
            202,
            203
        ];

        $unsuccessfulCodes = [
            400,
            404,
            500
        ];

        foreach ($successfulCodes as $code) {
            $this->assertTrue(Http::isSuccessful($code));
        }

        foreach ($unsuccessfulCodes as $code) {
            $this->assertFalse(Http::isSuccessful($code));
        }
    }

    /**
     * Test code
     * @return void
     */
    public function testCode()
    {
        $this->assertEquals(200, HTTP::HTTP_OK);
        $this->assertEquals(404, HTTP::HTTP_NOT_FOUND);
    }

    /**
     * Test static function
     * @return void
     */
    public function testStaticFun()
    {
        $this->assertEquals(200, Http::HTTP_OK());
        $this->assertNotEquals(403, Http::HTTP_NOT_FOUND());
    }
}