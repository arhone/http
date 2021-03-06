<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP ответ
 *
 * Class Response
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
class Response implements ResponseInterface {

    protected $header;
    protected $body;

}