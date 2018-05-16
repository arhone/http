<?php declare(strict_types = 1);
namespace arhone\http;

/**
 * Class Header
 * @package arhone\http
 * @author Алексей Арх <info@arh.one>
 */
class Header implements HeaderInterface {

    /**
     * @var array|false
     */
    protected $storage = [];

    /**
     * Header constructor.
     * @param array $storage
     */
    public function __construct (array $storage = []) {

        $this->storage = !empty($storage) ? $storage : [];

    }

    /**
     * Добавляет заголовки
     *
     * @param string $name
     * @param $value
     */
    public function add (string $name, $value = '') {

        $this->storage[$name][] = [
            'value'   => $value,
            'replace' => false
        ];

    }

    /**
     * Устанавливает заголовки
     *
     * @param string $name
     * @param $value
     */
    public function set (string $name, $value = '') {

        $this->storage[$name] = [
            [
                'value'   => $value,
                'replace' => true
            ]
        ];

    }

    /**
     * Вовращает значение заголовка
     *
     * @param string $name
     * @return array
     */
    public function get (string $name) : array {

        if (isset($this->storage[$name])) {
            return $this->storage[$name];
        }

        return $this->storage[$name] ?? [];

    }

    /**
     * Проверяет существование заголовка
     *
     * @param string $name
     * @return bool
     */
    public function has (string $name) : bool {

        return isset($this->storage[$name]);

    }

    /**
     * Удаляет заголовок
     *
     * @param string $name
     * @return mixed
     */
    public function delete (string $name) {

        unset($this->storage[$name]);
        return true;

    }

    /**
     * Отправляет все заголовки
     *
     * @param bool $clear
     */
    public function send (bool $clear = true) {

        foreach ($this->storage as $name => $data) {

            foreach ($data as $id => $header) {

                header($name . (!empty($header['value']) ? ':' . $header['value'] : ''), $header['replace']);

                if ($clear) {

                    unset($this->storage[$name][$id]);

                }

            }

        }

    }

    /**
     * Метод для установки заголовков
     *
     * @param array $header
     * @return array
     */
    public function header (array $header) : array {

        return $this->storage = array_merge($this->storage, $header);

    }

}