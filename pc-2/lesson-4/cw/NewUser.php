<?php

/**
 * Class NewUser
 * @method string getAddress()
 * @method void setAddress($street)
 * @method void setFirstName($firstName)
 */
class NewUser
{
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var Address
     */
    private $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }

    public function __destruct()
    {
    }

    function __get($name)
    {
        echo $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __call($name, $arguments)
    {
        if (method_exists($this->address, $name)) {
            return $this->address->$name(current($arguments));
        }

        // alternative case
        $method = lcfirst($name);
        $this->$method($arguments);

        $methodType = substr($name, 0, 3);
        $property = lcfirst(str_replace($methodType, '', $name));

        if ('has' === $methodType) {
            return property_exists($this, $property);
        }

        if ('get' === $methodType) {
            echo $this->$property;
        } elseif ('set' === $methodType) {
            $this->$property = current($arguments);
        } else {
            throw new \InvalidArgumentException;
        }
    }

    function __clone()
    {
        $this->firstName = null;
    }

    function __toString()
    {
        return (string)$this->firstName;
    }

    public function __invoke($args)
    {
        if (count($args) > 1) {
            die();
        }
    }

    function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    function __sleep()
    {
        return [
            'firstName', 'address'];
    }


    function __wakeup()
    {


        // TODO: Implement __wakeup() method.
    }

    static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
    }


}