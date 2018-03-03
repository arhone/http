<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP контейнер
 *
 * Class Http
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
class Http implements HttpInterface {

    /**
     * @var RequestInterface
     */
    protected $Request;

    /**
     * @var ResponseInterface
     */
    protected $Response;

    /**
     * Http constructor.
     * @param RequestInterface $Request
     * @param ResponseInterface $Response
     */
    public function __construct (RequestInterface $Request, ResponseInterface $Response) {

        $this->Request  = clone $Request;
        $this->Response = clone $Response;

    }

    /**
     * Возвращает объект
     *
     * @param $name
     * @return mixed
     */
    public function __get ($name) {

        if (isset($this->{$name})) {

            return clone $this->{$name};

        }

    }

    /**
     * Задаёт объект
     *
     * @param $name
     * @param $value
     */
    public function __set ($name, $value) {

        if (isset($this->{$name}) && ($value instanceof RequestInterface || $value instanceof ResponseInterface)) {

            $this->{$name} = clone $value;

        }

    }

    /**
     * @param RequestInterface $Request
     * @param ResponseInterface $Response
     */
    public function __invoke (RequestInterface $Request, ResponseInterface $Response) {

        $this->Request  = clone $Request;
        $this->Response = clone $Response;

    }

}