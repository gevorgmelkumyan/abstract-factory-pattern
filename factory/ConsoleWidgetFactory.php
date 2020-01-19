<?php


namespace App\Factory;


use App\Widget\ConsoleNavBar;
use App\Widget\ConsoleSideBar;
use App\Widget\ConsoleTable;

class ConsoleWidgetFactory extends WidgetFactory {

    public function createTable(): ConsoleTable {
        return new ConsoleTable();
    }

    public function createSideBar(): ConsoleSideBar {
        return new ConsoleSideBar();
    }

    public function createNavBar(): ConsoleNavBar {
        return new ConsoleNavBar();
    }

}