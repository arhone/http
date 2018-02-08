<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * HTTP контейнер
 *
 * Interface HttpInterface
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
interface HttpInterface {

    /**
     * Http constructor.
     * @param RequestInterface $Request
     * @param ResponseInterface $Response
     */
    public function __construct (RequestInterface $Request, ResponseInterface $Response);

    /**
     * Возвращает объект
     *
     * @param $name
     * @return mixed
     */
    public function __get ($name);

    /**
     * Задаёт объект
     *
     * @param $name
     * @param $value
     */
    public function __set ($name, $value);

    /**
     * Клинирует свойства
     */
    public function __clone ();

    /**
     * Возвращает новый объект
     *
     * @param RequestInterface $Request
     * @param ResponseInterface $Response
     * @return Http
     */
    public function __invoke (RequestInterface $Request, ResponseInterface $Response) : Http;

}