<?php

namespace Liopoos\HttpCode;

/**
 * HTTP Status Codes
 *
 * This class provides HTTP status code constants and utility methods for handling HTTP responses.
 * All standard HTTP status codes are available as both constants and static methods.
 *
 * @method static int HTTP_CONTINUE() 100 Continue - The server has received the request headers
 * @method static int HTTP_SWITCHING_PROTOCOLS() 101 Switching Protocols - The requester has asked the server to switch protocols
 * @method static int HTTP_PROCESSING() 102 Processing - The server has received and is processing the request
 * @method static int HTTP_EARLY_HINTS() 103 Early Hints - Used to return some response headers before final HTTP message
 * @method static int HTTP_OK() 200 OK - Standard response for successful HTTP requests
 * @method static int HTTP_CREATED() 201 Created - The request has been fulfilled and resulted in a new resource being created
 * @method static int HTTP_ACCEPTED() 202 Accepted - The request has been accepted for processing, but processing is not complete
 * @method static int HTTP_NON_AUTHORITATIVE_INFORMATION() 203 Non-Authoritative Information - The server successfully processed the request
 * @method static int HTTP_NO_CONTENT() 204 No Content - The server successfully processed the request and is not returning any content
 * @method static int HTTP_RESET_CONTENT() 205 Reset Content - The server successfully processed the request but is not returning any content
 * @method static int HTTP_PARTIAL_CONTENT() 206 Partial Content - The server is delivering only part of the resource due to a range header
 * @method static int HTTP_MULTI_STATUS() 207 Multi-Status - The message body contains multiple status codes
 * @method static int HTTP_ALREADY_REPORTED() 208 Already Reported - The members of a DAV binding have already been enumerated
 * @method static int HTTP_IM_USED() 226 IM Used - The server has fulfilled a request for the resource
 * @method static int HTTP_MULTIPLE_CHOICES() 300 Multiple Choices - Indicates multiple options for the resource
 * @method static int HTTP_MOVED_PERMANENTLY() 301 Moved Permanently - This and all future requests should be directed to the given URI
 * @method static int HTTP_FOUND() 302 Found - The resource was found but at a different URI
 * @method static int HTTP_SEE_OTHER() 303 See Other - The response to the request can be found under another URI
 * @method static int HTTP_NOT_MODIFIED() 304 Not Modified - Indicates the resource has not been modified since last requested
 * @method static int HTTP_USE_PROXY() 305 Use Proxy - The requested resource is only available through a proxy
 * @method static int HTTP_SWITCH_PROXY() 306 Switch Proxy - No longer used
 * @method static int HTTP_TEMPORARY_REDIRECT() 307 Temporary Redirect - The request should be repeated with another URI
 * @method static int HTTP_PERMANENT_REDIRECT() 308 Permanent Redirect - The request and all future requests should be repeated using another URI
 * @method static int HTTP_BAD_REQUEST() 400 Bad Request - The server cannot process the request due to client error
 * @method static int HTTP_UNAUTHORIZED() 401 Unauthorized - Authentication is required and has failed or has not been provided
 * @method static int HTTP_PAYMENT_REQUIRED() 402 Payment Required - Reserved for future use
 * @method static int HTTP_FORBIDDEN() 403 Forbidden - The request was valid but the server is refusing action
 * @method static int HTTP_NOT_FOUND() 404 Not Found - The requested resource could not be found
 * @method static int HTTP_METHOD_NOT_ALLOWED() 405 Method Not Allowed - The request method is not supported for the requested resource
 * @method static int HTTP_NOT_ACCEPTABLE() 406 Not Acceptable - The requested resource is capable of generating only content not acceptable
 * @method static int HTTP_PROXY_AUTHENTICATION_REQUIRED() 407 Proxy Authentication Required - The client must first authenticate with the proxy
 * @method static int HTTP_REQUEST_TIMEOUT() 408 Request Timeout - The server timed out waiting for the request
 * @method static int HTTP_CONFLICT() 409 Conflict - The request could not be processed because of conflict in the request
 * @method static int HTTP_GONE() 410 Gone - The resource requested is no longer available and will not be available again
 * @method static int HTTP_LENGTH_REQUIRED() 411 Length Required - The request did not specify the length of its content
 * @method static int HTTP_PRECONDITION_FAILED() 412 Precondition Failed - The server does not meet one of the preconditions
 * @method static int HTTP_PAYLOAD_TOO_LARGE() 413 Payload Too Large - The request is larger than the server is willing to process
 * @method static int HTTP_URI_TOO_LONG() 414 URI Too Long - The URI provided was too long for the server to process
 * @method static int HTTP_UNSUPPORTED_MEDIA_TYPE() 415 Unsupported Media Type - The request entity has a media type which the server does not support
 * @method static int HTTP_RANGE_NOT_SATISFIABLE() 416 Range Not Satisfiable - The client has asked for a portion of the file that the server cannot supply
 * @method static int HTTP_EXPECTATION_FAILED() 417 Expectation Failed - The server cannot meet the requirements of the Expect request-header field
 * @method static int HTTP_I_AM_A_TEAPOT() 418 I'm a teapot - This code was defined in 1998 as an April Fools' joke
 * @method static int HTTP_MISDIRECTED_REQUEST() 421 Misdirected Request - The request was directed at a server that is not able to produce a response
 * @method static int HTTP_UNPROCESSABLE_ENTITY() 422 Unprocessable Entity - The request was well-formed but was unable to be followed due to semantic errors
 * @method static int HTTP_LOCKED() 423 Locked - The resource that is being accessed is locked
 * @method static int HTTP_FAILED_DEPENDENCY() 424 Failed Dependency - The request failed due to failure of a previous request
 * @method static int HTTP_TOO_EARLY() 425 Too Early - The server is unwilling to risk processing a request that might be replayed
 * @method static int HTTP_UPGRADE_REQUIRED() 426 Upgrade Required - The client should switch to a different protocol
 * @method static int HTTP_PRECONDITION_REQUIRED() 428 Precondition Required - The origin server requires the request to be conditional
 * @method static int HTTP_TOO_MANY_REQUESTS() 429 Too Many Requests - The user has sent too many requests in a given amount of time
 * @method static int HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE() 431 Request Header Fields Too Large - The server is unwilling to process the request
 * @method static int HTTP_UNAVAILABLE_FOR_LEGAL_REASONS() 451 Unavailable For Legal Reasons - A server operator has received a legal demand to deny access
 * @method static int HTTP_INTERNAL_SERVER_ERROR() 500 Internal Server Error - A generic error message when an unexpected condition was encountered
 * @method static int HTTP_NOT_IMPLEMENTED() 501 Not Implemented - The server either does not recognize the request method
 * @method static int HTTP_BAD_GATEWAY() 502 Bad Gateway - The server was acting as a gateway and received an invalid response
 * @method static int HTTP_SERVICE_UNAVAILABLE() 503 Service Unavailable - The server is currently unavailable
 * @method static int HTTP_GATEWAY_TIMEOUT() 504 Gateway Timeout - The server was acting as a gateway and did not receive a timely response
 * @method static int HTTP_HTTP_VERSION_NOT_SUPPORTED() 505 HTTP Version Not Supported - The server does not support the HTTP protocol version
 * @method static int HTTP_VARIANT_ALSO_NEGOTIATES() 506 Variant Also Negotiates - Transparent content negotiation for the request results in a circular reference
 * @method static int HTTP_INSUFFICIENT_STORAGE() 507 Insufficient Storage - The server is unable to store the representation needed to complete the request
 * @method static int HTTP_LOOP_DETECTED() 508 Loop Detected - The server detected an infinite loop while processing the request
 * @method static int HTTP_NOT_EXTENDED() 510 Not Extended - Further extensions to the request are required for the server to fulfill it
 * @method static int HTTP_NETWORK_AUTHENTICATION_REQUIRED() 511 Network Authentication Required - The client needs to authenticate to gain network access
 */
class Http
{
    /**
     * Informational responses (1xx)
     * These status codes indicate that the request was received and understood.
     */
    
    /** @var int 100 Continue - The server has received the request headers and the client should proceed to send the request body */
    const HTTP_CONTINUE = 100;
    
    /** @var int 101 Switching Protocols - The requester has asked the server to switch protocols and the server has agreed to do so */
    const HTTP_SWITCHING_PROTOCOLS = 101;
    
    /** @var int 102 Processing - The server has received and is processing the request, but no response is available yet */
    const HTTP_PROCESSING = 102;
    
    /** @var int 103 Early Hints - Used to return some response headers before final HTTP message */
    const HTTP_EARLY_HINTS = 103;

    /**
     * Successful responses (2xx)
     * These status codes indicate that the client's request was successfully received, understood, and accepted.
     */
    
    /** @var int 200 OK - Standard response for successful HTTP requests */
    const HTTP_OK = 200;
    
    /** @var int 201 Created - The request has been fulfilled and resulted in a new resource being created */
    const HTTP_CREATED = 201;
    
    /** @var int 202 Accepted - The request has been accepted for processing, but the processing has not been completed */
    const HTTP_ACCEPTED = 202;
    
    /** @var int 203 Non-Authoritative Information - The server successfully processed the request, but is returning information from another source */
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    
    /** @var int 204 No Content - The server successfully processed the request and is not returning any content */
    const HTTP_NO_CONTENT = 204;
    
    /** @var int 205 Reset Content - The server successfully processed the request, but is not returning any content and requires that the requester reset the document view */
    const HTTP_RESET_CONTENT = 205;
    
    /** @var int 206 Partial Content - The server is delivering only part of the resource due to a range header sent by the client */
    const HTTP_PARTIAL_CONTENT = 206;
    
    /** @var int 207 Multi-Status - The message body that follows is an XML message and can contain a number of separate response codes */
    const HTTP_MULTI_STATUS = 207;
    
    /** @var int 208 Already Reported - The members of a DAV binding have already been enumerated in a previous reply and are not being included again */
    const HTTP_ALREADY_REPORTED = 208;
    
    /** @var int 226 IM Used - The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations */
    const HTTP_IM_USED = 226;

    /**
     * Redirection messages (3xx)
     * These status codes indicate that further action needs to be taken by the user agent in order to fulfill the request.
     */
    
    /** @var int 300 Multiple Choices - Indicates multiple options for the resource that the client may follow */
    const HTTP_MULTIPLE_CHOICES = 300;
    
    /** @var int 301 Moved Permanently - This and all future requests should be directed to the given URI */
    const HTTP_MOVED_PERMANENTLY = 301;
    
    /** @var int 302 Found - The resource was found but at a different URI, this is a temporary redirect */
    const HTTP_FOUND = 302;
    
    /** @var int 303 See Other - The response to the request can be found under another URI using a GET method */
    const HTTP_SEE_OTHER = 303;
    
    /** @var int 304 Not Modified - Indicates that the resource has not been modified since the version specified by the request headers */
    const HTTP_NOT_MODIFIED = 304;
    
    /** @var int 305 Use Proxy - The requested resource is only available through a proxy, whose address is provided in the response */
    const HTTP_USE_PROXY = 305;
    
    /** @var int 306 Switch Proxy - No longer used, originally meant "Subsequent requests should use the specified proxy" */
    const HTTP_SWITCH_PROXY = 306;
    
    /** @var int 307 Temporary Redirect - The request should be repeated with another URI; however, future requests should still use the original URI */
    const HTTP_TEMPORARY_REDIRECT = 307;
    
    /** @var int 308 Permanent Redirect - The request and all future requests should be repeated using another URI */
    const HTTP_PERMANENT_REDIRECT = 308;

    /**
     * Client error responses (4xx)
     * These status codes indicate that the client seems to have made an error.
     */
    
    /** @var int 400 Bad Request - The server cannot or will not process the request due to an apparent client error */
    const HTTP_BAD_REQUEST = 400;
    
    /** @var int 401 Unauthorized - Authentication is required and has failed or has not yet been provided */
    const HTTP_UNAUTHORIZED = 401;
    
    /** @var int 402 Payment Required - Reserved for future use, originally created for digital payment systems */
    const HTTP_PAYMENT_REQUIRED = 402;
    
    /** @var int 403 Forbidden - The request was valid, but the server is refusing action */
    const HTTP_FORBIDDEN = 403;
    
    /** @var int 404 Not Found - The requested resource could not be found but may be available in the future */
    const HTTP_NOT_FOUND = 404;
    
    /** @var int 405 Method Not Allowed - A request method is not supported for the requested resource */
    const HTTP_METHOD_NOT_ALLOWED = 405;
    
    /** @var int 406 Not Acceptable - The requested resource is capable of generating only content not acceptable according to the Accept headers */
    const HTTP_NOT_ACCEPTABLE = 406;
    
    /** @var int 407 Proxy Authentication Required - The client must first authenticate itself with the proxy */
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    
    /** @var int 408 Request Timeout - The server timed out waiting for the request */
    const HTTP_REQUEST_TIMEOUT = 408;
    
    /** @var int 409 Conflict - The request could not be processed because of conflict in the request */
    const HTTP_CONFLICT = 409;
    
    /** @var int 410 Gone - The resource requested is no longer available and will not be available again */
    const HTTP_GONE = 410;
    
    /** @var int 411 Length Required - The request did not specify the length of its content, which is required by the requested resource */
    const HTTP_LENGTH_REQUIRED = 411;
    
    /** @var int 412 Precondition Failed - The server does not meet one of the preconditions that the requester put on the request */
    const HTTP_PRECONDITION_FAILED = 412;
    
    /** @var int 413 Payload Too Large - The request is larger than the server is willing or able to process */
    const HTTP_PAYLOAD_TOO_LARGE = 413;
    
    /** @var int 414 URI Too Long - The URI provided was too long for the server to process */
    const HTTP_URI_TOO_LONG = 414;
    
    /** @var int 415 Unsupported Media Type - The request entity has a media type which the server or resource does not support */
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    
    /** @var int 416 Range Not Satisfiable - The client has asked for a portion of the file, but the server cannot supply that portion */
    const HTTP_RANGE_NOT_SATISFIABLE = 416;
    
    /** @var int 417 Expectation Failed - The server cannot meet the requirements of the Expect request-header field */
    const HTTP_EXPECTATION_FAILED = 417;
    
    /** @var int 418 I'm a teapot - This code was defined in 1998 as one of the traditional IETF April Fools' jokes */
    const HTTP_I_AM_A_TEAPOT = 418;
    
    /** @var int 421 Misdirected Request - The request was directed at a server that is not able to produce a response */
    const HTTP_MISDIRECTED_REQUEST = 421;
    
    /** @var int 422 Unprocessable Entity - The request was well-formed but was unable to be followed due to semantic errors */
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    
    /** @var int 423 Locked - The resource that is being accessed is locked */
    const HTTP_LOCKED = 423;
    
    /** @var int 424 Failed Dependency - The request failed due to failure of a previous request */
    const HTTP_FAILED_DEPENDENCY = 424;
    
    /** @var int 425 Too Early - The server is unwilling to risk processing a request that might be replayed */
    const HTTP_TOO_EARLY = 425;
    
    /** @var int 426 Upgrade Required - The client should switch to a different protocol */
    const HTTP_UPGRADE_REQUIRED = 426;
    
    /** @var int 428 Precondition Required - The origin server requires the request to be conditional */
    const HTTP_PRECONDITION_REQUIRED = 428;
    
    /** @var int 429 Too Many Requests - The user has sent too many requests in a given amount of time ("rate limiting") */
    const HTTP_TOO_MANY_REQUESTS = 429;
    
    /** @var int 431 Request Header Fields Too Large - The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large */
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    
    /** @var int 451 Unavailable For Legal Reasons - A server operator has received a legal demand to deny access to a resource or to a set of resources */
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Server error responses (5xx)
     * These status codes indicate that the server failed to fulfill an apparently valid request.
     */
    
    /** @var int 500 Internal Server Error - A generic error message when an unexpected condition was encountered */
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    
    /** @var int 501 Not Implemented - The server either does not recognize the request method, or it lacks the ability to fulfill the request */
    const HTTP_NOT_IMPLEMENTED = 501;
    
    /** @var int 502 Bad Gateway - The server was acting as a gateway or proxy and received an invalid response from the upstream server */
    const HTTP_BAD_GATEWAY = 502;
    
    /** @var int 503 Service Unavailable - The server is currently unavailable (because it is overloaded or down for maintenance) */
    const HTTP_SERVICE_UNAVAILABLE = 503;
    
    /** @var int 504 Gateway Timeout - The server was acting as a gateway or proxy and did not receive a timely response from the upstream server */
    const HTTP_GATEWAY_TIMEOUT = 504;
    
    /** @var int 505 HTTP Version Not Supported - The server does not support the HTTP protocol version used in the request */
    const HTTP_HTTP_VERSION_NOT_SUPPORTED = 505;
    
    /** @var int 506 Variant Also Negotiates - Transparent content negotiation for the request results in a circular reference */
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;
    
    /** @var int 507 Insufficient Storage - The server is unable to store the representation needed to complete the request */
    const HTTP_INSUFFICIENT_STORAGE = 507;
    
    /** @var int 508 Loop Detected - The server detected an infinite loop while processing the request */
    const HTTP_LOOP_DETECTED = 508;
    
    /** @var int 510 Not Extended - Further extensions to the request are required for the server to fulfill it */
    const HTTP_NOT_EXTENDED = 510;
    
    /** @var int 511 Network Authentication Required - The client needs to authenticate to gain network access */
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Check if the HTTP status code is successful (2xx range)
     *
     * @param int $code The HTTP status code to check
     * @return bool True if the status code is in the 2xx success range, false otherwise
     */
    public static function isSuccessful($code)
    {
        switch ($code) {
            case self::HTTP_OK:
            case self::HTTP_CREATED:
            case self::HTTP_ACCEPTED:
            case self::HTTP_NON_AUTHORITATIVE_INFORMATION:
            case self::HTTP_NO_CONTENT:
            case self::HTTP_RESET_CONTENT:
            case self::HTTP_PARTIAL_CONTENT:
            case self::HTTP_MULTI_STATUS:
            case self::HTTP_ALREADY_REPORTED:
            case self::HTTP_IM_USED:
                return true;
            default:
                return false;
        }
    }

    /**
     * Magic method to get the constant value by calling it as a static method
     *
     * This allows you to call Http::HTTP_OK() instead of accessing Http::HTTP_OK
     * 
     * @param string $name The name of the constant/method being called
     * @param array $arguments The arguments passed to the method (not used)
     * @return int The value of the constant
     * @throws \BadMethodCallException If the constant does not exist
     */
    public static function __callStatic($name, $arguments)
    {
        $constant = 'self::' . $name;
        if (defined($constant)) {
            return constant($constant);
        }

        throw new \BadMethodCallException("No static method or constant '$name' in class " . __CLASS__);
    }
}