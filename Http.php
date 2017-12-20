<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP контейнер
 *
 * Class Http
 * @package arhone\http
 */
class Http implements HttpInterface {

    /**
     * @var Request
     */
    protected $Request;

    /**
     * @var Response
     */
    protected $Response;

    /**
     * Http constructor.
     * @param Request $Request
     * @param Response $Response
     */
    public function __construct (Request $Request, Response $Response) {

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

        if (isset($this->{$name}) && ($value instanceof Request || $value instanceof Response)) {

            $this->{$name} = clone $value;

        }

    }

}