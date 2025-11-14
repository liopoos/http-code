<?php

use Liopoos\HttpCode\Http;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the Http class
 */
class HttpTest extends TestCase
{
    /**
     * Test isSuccessful method with all 2xx status codes
     * 
     * @return void
     */
    public function testIsSuccessfulWithAllSuccessCodes()
    {
        $successfulCodes = [
            Http::HTTP_OK,
            Http::HTTP_CREATED,
            Http::HTTP_ACCEPTED,
            Http::HTTP_NON_AUTHORITATIVE_INFORMATION,
            Http::HTTP_NO_CONTENT,
            Http::HTTP_RESET_CONTENT,
            Http::HTTP_PARTIAL_CONTENT,
            Http::HTTP_MULTI_STATUS,
            Http::HTTP_ALREADY_REPORTED,
            Http::HTTP_IM_USED,
        ];

        foreach ($successfulCodes as $code) {
            $this->assertTrue(
                Http::isSuccessful($code),
                "Expected status code {$code} to be successful"
            );
        }
    }

    /**
     * Test isSuccessful method with non-2xx status codes
     * 
     * @return void
     */
    public function testIsSuccessfulWithNonSuccessCodes()
    {
        $unsuccessfulCodes = [
            Http::HTTP_CONTINUE,
            Http::HTTP_SWITCHING_PROTOCOLS,
            Http::HTTP_MULTIPLE_CHOICES,
            Http::HTTP_MOVED_PERMANENTLY,
            Http::HTTP_BAD_REQUEST,
            Http::HTTP_UNAUTHORIZED,
            Http::HTTP_FORBIDDEN,
            Http::HTTP_NOT_FOUND,
            Http::HTTP_METHOD_NOT_ALLOWED,
            Http::HTTP_INTERNAL_SERVER_ERROR,
            Http::HTTP_BAD_GATEWAY,
            Http::HTTP_SERVICE_UNAVAILABLE,
        ];

        foreach ($unsuccessfulCodes as $code) {
            $this->assertFalse(
                Http::isSuccessful($code),
                "Expected status code {$code} to not be successful"
            );
        }
    }

    /**
     * Test that all 1xx informational status code constants exist and have correct values
     * 
     * @return void
     */
    public function test1xxInformationalCodes()
    {
        $this->assertEquals(100, Http::HTTP_CONTINUE);
        $this->assertEquals(101, Http::HTTP_SWITCHING_PROTOCOLS);
        $this->assertEquals(102, Http::HTTP_PROCESSING);
        $this->assertEquals(103, Http::HTTP_EARLY_HINTS);
    }

    /**
     * Test that all 2xx success status code constants exist and have correct values
     * 
     * @return void
     */
    public function test2xxSuccessCodes()
    {
        $this->assertEquals(200, Http::HTTP_OK);
        $this->assertEquals(201, Http::HTTP_CREATED);
        $this->assertEquals(202, Http::HTTP_ACCEPTED);
        $this->assertEquals(203, Http::HTTP_NON_AUTHORITATIVE_INFORMATION);
        $this->assertEquals(204, Http::HTTP_NO_CONTENT);
        $this->assertEquals(205, Http::HTTP_RESET_CONTENT);
        $this->assertEquals(206, Http::HTTP_PARTIAL_CONTENT);
        $this->assertEquals(207, Http::HTTP_MULTI_STATUS);
        $this->assertEquals(208, Http::HTTP_ALREADY_REPORTED);
        $this->assertEquals(226, Http::HTTP_IM_USED);
    }

    /**
     * Test that all 3xx redirection status code constants exist and have correct values
     * 
     * @return void
     */
    public function test3xxRedirectionCodes()
    {
        $this->assertEquals(300, Http::HTTP_MULTIPLE_CHOICES);
        $this->assertEquals(301, Http::HTTP_MOVED_PERMANENTLY);
        $this->assertEquals(302, Http::HTTP_FOUND);
        $this->assertEquals(303, Http::HTTP_SEE_OTHER);
        $this->assertEquals(304, Http::HTTP_NOT_MODIFIED);
        $this->assertEquals(305, Http::HTTP_USE_PROXY);
        $this->assertEquals(306, Http::HTTP_SWITCH_PROXY);
        $this->assertEquals(307, Http::HTTP_TEMPORARY_REDIRECT);
        $this->assertEquals(308, Http::HTTP_PERMANENT_REDIRECT);
    }

    /**
     * Test that all 4xx client error status code constants exist and have correct values
     * 
     * @return void
     */
    public function test4xxClientErrorCodes()
    {
        $this->assertEquals(400, Http::HTTP_BAD_REQUEST);
        $this->assertEquals(401, Http::HTTP_UNAUTHORIZED);
        $this->assertEquals(402, Http::HTTP_PAYMENT_REQUIRED);
        $this->assertEquals(403, Http::HTTP_FORBIDDEN);
        $this->assertEquals(404, Http::HTTP_NOT_FOUND);
        $this->assertEquals(405, Http::HTTP_METHOD_NOT_ALLOWED);
        $this->assertEquals(406, Http::HTTP_NOT_ACCEPTABLE);
        $this->assertEquals(407, Http::HTTP_PROXY_AUTHENTICATION_REQUIRED);
        $this->assertEquals(408, Http::HTTP_REQUEST_TIMEOUT);
        $this->assertEquals(409, Http::HTTP_CONFLICT);
        $this->assertEquals(410, Http::HTTP_GONE);
        $this->assertEquals(411, Http::HTTP_LENGTH_REQUIRED);
        $this->assertEquals(412, Http::HTTP_PRECONDITION_FAILED);
        $this->assertEquals(413, Http::HTTP_PAYLOAD_TOO_LARGE);
        $this->assertEquals(414, Http::HTTP_URI_TOO_LONG);
        $this->assertEquals(415, Http::HTTP_UNSUPPORTED_MEDIA_TYPE);
        $this->assertEquals(416, Http::HTTP_RANGE_NOT_SATISFIABLE);
        $this->assertEquals(417, Http::HTTP_EXPECTATION_FAILED);
        $this->assertEquals(418, Http::HTTP_I_AM_A_TEAPOT);
        $this->assertEquals(421, Http::HTTP_MISDIRECTED_REQUEST);
        $this->assertEquals(422, Http::HTTP_UNPROCESSABLE_ENTITY);
        $this->assertEquals(423, Http::HTTP_LOCKED);
        $this->assertEquals(424, Http::HTTP_FAILED_DEPENDENCY);
        $this->assertEquals(425, Http::HTTP_TOO_EARLY);
        $this->assertEquals(426, Http::HTTP_UPGRADE_REQUIRED);
        $this->assertEquals(428, Http::HTTP_PRECONDITION_REQUIRED);
        $this->assertEquals(429, Http::HTTP_TOO_MANY_REQUESTS);
        $this->assertEquals(431, Http::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE);
        $this->assertEquals(451, Http::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS);
    }

    /**
     * Test that all 5xx server error status code constants exist and have correct values
     * 
     * @return void
     */
    public function test5xxServerErrorCodes()
    {
        $this->assertEquals(500, Http::HTTP_INTERNAL_SERVER_ERROR);
        $this->assertEquals(501, Http::HTTP_NOT_IMPLEMENTED);
        $this->assertEquals(502, Http::HTTP_BAD_GATEWAY);
        $this->assertEquals(503, Http::HTTP_SERVICE_UNAVAILABLE);
        $this->assertEquals(504, Http::HTTP_GATEWAY_TIMEOUT);
        $this->assertEquals(505, Http::HTTP_HTTP_VERSION_NOT_SUPPORTED);
        $this->assertEquals(506, Http::HTTP_VARIANT_ALSO_NEGOTIATES);
        $this->assertEquals(507, Http::HTTP_INSUFFICIENT_STORAGE);
        $this->assertEquals(508, Http::HTTP_LOOP_DETECTED);
        $this->assertEquals(510, Http::HTTP_NOT_EXTENDED);
        $this->assertEquals(511, Http::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
    }

    /**
     * Test that constants can be accessed as static methods using __callStatic
     * 
     * @return void
     */
    public function testStaticMethodAccess()
    {
        $this->assertEquals(200, Http::HTTP_OK());
        $this->assertEquals(201, Http::HTTP_CREATED());
        $this->assertEquals(404, Http::HTTP_NOT_FOUND());
        $this->assertEquals(500, Http::HTTP_INTERNAL_SERVER_ERROR());
        $this->assertEquals(301, Http::HTTP_MOVED_PERMANENTLY());
    }

    /**
     * Test that calling a non-existent constant as a method throws an exception
     * 
     * @return void
     */
    public function testStaticMethodThrowsExceptionForNonExistentConstant()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage("No static method or constant 'HTTP_DOES_NOT_EXIST' in class");
        
        Http::HTTP_DOES_NOT_EXIST();
    }

    /**
     * Test that static method calls return the same values as constant access
     * 
     * @return void
     */
    public function testStaticMethodMatchesConstantValue()
    {
        $this->assertEquals(Http::HTTP_OK, Http::HTTP_OK());
        $this->assertEquals(Http::HTTP_NOT_FOUND, Http::HTTP_NOT_FOUND());
        $this->assertEquals(Http::HTTP_CREATED, Http::HTTP_CREATED());
        $this->assertNotEquals(Http::HTTP_OK, Http::HTTP_NOT_FOUND());
    }
}