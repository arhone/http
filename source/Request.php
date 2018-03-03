<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP запрос
 *
 * Class Request
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
class Request implements RequestInterface {

    protected $server;
    protected $header;
    protected $get;
    protected $post;
    protected $cookie;
    protected $files;
    protected $body;

    /**
     * Request constructor.
     * @param array $server
     * @param array $header
     * @param array $get
     * @param array $post
     * @param array $cookie
     * @param array $files
     */
    public function __construct(array $server, array $header, array $get, array $post, array $cookie, array $files) {

        $this->server = $server;
        $this->header = $header;
        $this->get    = $get;
        $this->post   = $post;
        $this->cookie = $cookie;
        $this->files  = $files;

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