<?php

require __DIR__ . '\vendor\autoload.php';

use App\Factory\WidgetFactory;
use App\Factory\ConsoleWidgetFactory;
use App\Factory\WebWidgetFactory;

class Client {

    protected WidgetFactory $factory;

    public function __construct(WidgetFactory $factory) {
        $this->factory = $factory;
    }

    public function run() {
        echo "This is the widget:" . PHP_EOL;
        $this->factory->show();
    }
}

$client = new Client(new WebWidgetFactory());

$client->run();