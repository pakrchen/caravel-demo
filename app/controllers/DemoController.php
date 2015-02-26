<?php

class DemoController
{
    public function indexAction()
    {
        $demo = new Demo();

        $welcome = $demo->welcome();

        return View::make("demo.index", array("welcome" => $welcome));
    }
}
