<?php

namespace PlayNow\app\controllers;

class PagesController implements PagesInterface
{
    public $page;

    public function __construct($page = 'index')
    {
        $this->page = $page;
    }

    /**
     * Include the layout
     * @param string $layout
     */
    public function layout($layout = 'default')
    {
        require dirname(__DIR__) . '/views/layout/' . $layout . '.php';
    }

    /**
     * Render the front page
     */
    public function render()
    {
        require dirname(__DIR__) . '/views/page/' . $this->page . '.php';
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param string $page
     * @return PagesController
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

}