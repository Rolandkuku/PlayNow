<?php

namespace app\router;

class Router
{
    private $_url;
    private $_routes = [

    ];

    public function __construct($_url)
    {
        $this->_url = $_url;
    }

    /**
     * @param $_path
     * @param $_call
     */
    public function get($_path, $_call)
    {
        $route = new route($_path, $_call);
        $this->_routes['GET'][] = $route;
    }

    /**
     * @param $_path
     * @param $_call
     */
    public function post($_path, $_call)
    {
        $route = new route($_path, $_call);
        $this->_routes['POST'][] = $route;
    }

    /**
     * @param $_path
     * @param $_call
     */
    public function put($_path, $_call)
    {
        $route = new route($_path, $_call);
        $this->_routes['put'][] = $route;
    }

    /**
     * @param $_path
     * @param $_call
     */
    public function patch($_path, $_call)
    {
        $route = new route($_path, $_call);
        $this->_routes['patch'][] = $route;
    }

    /**
     * @param $_path
     * @param $_call
     */
    public function delete($_path, $_call)
    {
        $route = new route($_path, $_call);
        $this->_routes['delete'][] = $route;
    }

    public function map()
    {

    }
}