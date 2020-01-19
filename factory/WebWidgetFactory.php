<?php


namespace App\Factory;


use App\Widget\WebNavBar;
use App\Widget\WebSideBar;
use App\Widget\WebTable;

class WebWidgetFactory extends WidgetFactory {

    public function createTable(): WebTable {
        return new WebTable();
    }

    public function createSideBar(): WebSideBar {
        return new WebSideBar();
    }

    public function createNavBar(): WebNavBar {
        return new WebNavBar();
    }
}
