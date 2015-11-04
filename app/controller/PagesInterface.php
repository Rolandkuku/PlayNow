<?php

namespace PlayNow\app\controllers;

interface PagesInterface
{
    public function layout($layout);

    public function render();

    public function getPage();

    public function setPage($page);
}