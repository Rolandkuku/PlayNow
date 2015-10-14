<?php

namespace app\router;

class Route
{
    private $_path;
    private $_call;

    public function __construct($_path, $_call)
    {
        $this->_path = $_path;
        $this->_call = $_call;
    }
}