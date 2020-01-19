<?php

namespace App\Factory;

use App\Widget\AbstractNavBar;
use App\Widget\AbstractSideBar;
use App\Widget\AbstractTable;

abstract class WidgetFactory {
    public abstract function createTable(): AbstractTable;
    public abstract function createSideBar(): AbstractSideBar;
    public abstract function createNavBar(): AbstractNavBar;
    public final function show(): void {
        $navBar = $this->createNavBar();
        $table = $this->createTable();
        $sideBar = $this->createSideBar();

        $navBar->draw();
        $table->draw();
        $sideBar->draw();
    }
}