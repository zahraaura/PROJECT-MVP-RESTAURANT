<?php
require_once 'app/models/Menu.php';

class MenuController {
    public function index() {
        $menus = Menu::getAllMenus();
        require 'app/views/menu/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            Menu::addMenu($name, $type, $price);
            header('Location: index.php?controller=menu&action=index');
        }
        require 'app/views/menu/add.php';
    }

    public function edit($id) {
        $menu = Menu::getMenuById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            Menu::updateMenu($id, $name, $type, $price);
            header('Location: index.php?controller=menu&action=index');
        }
        require 'app/views/menu/edit.php';
    }

    public function delete($id) {
        Menu::deleteMenu($id);
        header('Location: index.php?controller=menu&action=index');
    }

    public function detail($id) {
        $menu = Menu::getMenuById($id);
        require 'app/views/menu/detail.php';
    }
}
?>