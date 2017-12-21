<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP запрос
 *
 * Class Request
 * @package arhone\http
 */
class Request implements RequestInterface {

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
     * @param array $header
     */
    public function __construct(array $server, array $get, array $post, array $cookie, array $files, array $header = []) {

        $this->server = $server;
        $this->get    = $get;
        $this->post   = $post;
        $this->cookie = $cookie;
        $this->files  = $files;
        $this->header = !empty($header) ? $header : getallheaders();

    }

    /**
     * Получает значение массива
     *
     * @param string $key
     * @param $storage
     * @return null
     */
    public function getValue (string $key, &$storage) {

        if (empty($key)) {

            return $storage;

        }

        foreach (explode('.', $key) as $k) {

            if (!isset($storage[$k])) {
                return null;
            }

            $storage = &$storage[$k];

        }

        if (isset($storage)) {

            return $storage;

        }

        return null;

    }

}