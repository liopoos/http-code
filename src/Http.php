<?php

namespace Liopoos\HttpCode;

/**
 * @method static int HTTP_CONTINUE()
 * @method static int HTTP_SWITCHING_PROTOCOLS()
 * @method static int HTTP_PROCESSING()
 * @method static int HTTP_EARLY_HINTS()
 * @method static int HTTP_OK()
 * @method static int HTTP_CREATED()
 * @method static int HTTP_ACCEPTED()
 * @method static int HTTP_NON_AUTHORITATIVE_INFORMATION()
 * @method static int HTTP_NO_CONTENT()
 * @method static int HTTP_RESET_CONTENT()
 * @method static int HTTP_PARTIAL_CONTENT()
 * @method static int HTTP_MULTI_STATUS()
 * @method static int HTTP_ALREADY_REPORTED()
 * @method static int HTTP_IM_USED()
 * @method static int HTTP_MULTIPLE_CHOICES()
 * @method static int HTTP_MOVED_PERMANENTLY()
 * @method static int HTTP_FOUND()
 * @method static int HTTP_SEE_OTHER()
 * @method static int HTTP_NOT_MODIFIED()
 * @method static int HTTP_USE_PROXY()
 * @method static int HTTP_SWITCH_PROXY()
 * @method static int HTTP_TEMPORARY_REDIRECT()
 * @method static int HTTP_PERMANENT_REDIRECT()
 * @method static int HTTP_BAD_REQUEST()
 * @method static int HTTP_UNAUTHORIZED()
 * @method static int HTTP_PAYMENT_REQUIRED()
 * @method static int HTTP_FORBIDDEN()
 * @method static int HTTP_NOT_FOUND()
 * @method static int HTTP_METHOD_NOT_ALLOWED()
 * @method static int HTTP_NOT_ACCEPTABLE()
 * @method static int HTTP_PROXY_AUTHENTICATION_REQUIRED()
 * @method static int HTTP_REQUEST_TIMEOUT()
 * @method static int HTTP_CONFLICT()
 * @method static int HTTP_GONE()
 * @method static int HTTP_LENGTH_REQUIRED()
 * @method static int HTTP_PRECONDITION_FAILED()
 * @method static int HTTP_PAYLOAD_TOO_LARGE()
 * @method static int HTTP_URI_TOO_LONG()
 * @method static int HTTP_UNSUPPORTED_MEDIA_TYPE()
 * @method static int HTTP_RANGE_NOT_SATISFIABLE()
 * @method static int HTTP_EXPECTATION_FAILED()
 * @method static int HTTP_I_AM_A_TEAPOT()
 * @method static int HTTP_MISDIRECTED_REQUEST()
 * @method static int HTTP_UNPROCESSABLE_ENTITY()
 * @method static int HTTP_LOCKED()
 * @method static int HTTP_FAILED_DEPENDENCY()
 * @method static int HTTP_TOO_EARLY()
 * @method static int HTTP_UPGRADE_REQUIRED()
 * @method static int HTTP_PRECONDITION_REQUIRED()
 * @method static int HTTP_TOO_MANY_REQUESTS()
 * @method static int HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE()
 * @method static int HTTP_UNAVAILABLE_FOR_LEGAL_REASONS()
 * @method static int HTTP_INTERNAL_SERVER_ERROR()
 * @method static int HTTP_NOT_IMPLEMENTED()
 * @method static int HTTP_BAD_GATEWAY()
 * @method static int HTTP_SERVICE_UNAVAILABLE()
 * @method static int HTTP_GATEWAY_TIMEOUT()
 * @method static int HTTP_HTTP_VERSION_NOT_SUPPORTED()
 * @method static int HTTP_VARIANT_ALSO_NEGOTIATES()
 * @method static int HTTP_INSUFFICIENT_STORAGE()
 * @method static int HTTP_LOOP_DETECTED()
 * @method static int HTTP_NOT_EXTENDED()
 * @method static int HTTP_NETWORK_AUTHENTICATION_REQUIRED()
 */
class Http
{
    /**
     * 1xx
     */
    const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_PROCESSING = 102;
    const HTTP_EARLY_HINTS = 103;

    /**
     * 2xx
     */
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_ACCEPTED = 202;
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTI_STATUS = 207;
    const HTTP_ALREADY_REPORTED = 208;
    const HTTP_IM_USED = 226;

    /**
     * 3xx
     */
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_FOUND = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_SWITCH_PROXY = 306;
    const HTTP_TEMPORARY_REDIRECT = 307;
    const HTTP_PERMANENT_REDIRECT = 308;

    /**
     * 4xx
     */
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_PAYLOAD_TOO_LARGE = 413;
    const HTTP_URI_TOO_LONG = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_I_AM_A_TEAPOT = 418;
    const HTTP_MISDIRECTED_REQUEST = 421;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    const HTTP_LOCKED = 423;
    const HTTP_FAILED_DEPENDENCY = 424;
    const HTTP_TOO_EARLY = 425;
    const HTTP_UPGRADE_REQUIRED = 426;
    const HTTP_PRECONDITION_REQUIRED = 428;
    const HTTP_TOO_MANY_REQUESTS = 429;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * 5xx
     */
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;
    const HTTP_INSUFFICIENT_STORAGE = 507;
    const HTTP_LOOP_DETECTED = 508;
    const HTTP_NOT_EXTENDED = 510;
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Check if the response code is successful
     * @param $code
     * @return bool
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
     * Magic method to get the constant value
     * @param $name
     * @param $arguments
     * @return mixed
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