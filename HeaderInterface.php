<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * Interface HeaderInterface
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
interface HeaderInterface {

    /**
     * HeaderInterface constructor.
     *
     * @param array $header
     */
    public function __construct (array $header = []);

    /**
     * Добавляет заголовки
     *
     * @param string $name
     * @param $value
     */
    public function add (string $name, $value = '');

    /**
     * Устанавливает заголовки
     *
     * @param string $name
     * @param $value
     */
    public function set (string $name, $value = '');

    /**
     * Вовращает значение заголовка
     *
     * @param string $name
     * @return array
     */
    public function get (string $name) : array;

    /**
     * Проверяет существование заголовка
     *
     * @param string $name
     * @return bool
     */
    public function has (string $name) : bool;

    /**
     * Удаляет заголовок
     *
     * @param string $name
     * @return mixed
     */
    public function delete (string $name);

    /**
     * Отправляет все заголовки
     *
     * @param bool $clear
     */
    public function send (bool $clear = true);

    /**
     * Метод для установки заголовков
     *
     * @param array $header
     * @return array
     */
    public function header (array $header) : array;

}