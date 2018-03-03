<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP запрос
 *
 * Class Request
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
class Request implements ResponseInterface {

    protected $server;
    protected $get;
    protected $post;
    protected $cookie;
    protected $files;
    protected $header;
    protected $body;

    /**
     * Request constructor.
     * @param array $server
     * @param array $get
     * @param array $post
     * @param array $cookie
     * @param array $files
     */
    public function __construct(array $server, array $get, array $post, array $cookie, array $files) {

        $this->server = $server;
        $this->get    = $get;
        $this->post   = $post;
        $this->cookie = $cookie;
        $this->files  = $files;

    }

}