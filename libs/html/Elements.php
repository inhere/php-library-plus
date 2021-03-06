<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 15-4-1
 * Time: 上午10:08
 * Used: create html Element
 * file: Element.php
 */

namespace Inhere\LibraryPlus\Html;

use Inhere\Library\StdObject;

/**
 * Class Elements
 * @package Inhere\LibraryPlus\Html
 */
class Elements extends StdObject implements \IteratorAggregate
{
    public $elements = [];

    /**
     * Elements constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getString()
    {
        $string = '';

        foreach ($this->elements as $key => $element) {
            $string .= (string)$element;
        }

        return $string;
    }

    public function __toString()
    {
        return $this->getString();
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->elements);
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     * @return $this
     */
    public function setElements(array $elements)
    {
        $this->elements = $elements;

        return $this;
    }
}
