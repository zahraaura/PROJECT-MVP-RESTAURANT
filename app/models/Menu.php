<?php
class Menu {
    public static function getAllMenus() {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM menus");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getMenuById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM menus WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function addMenu($name, $type, $price) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO menus (name, type, price) VALUES (?, ?, ?)");
        $stmt->execute([$name, $type, $price]);
    }

    public static function updateMenu($id, $name, $type, $price) {
        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE menus SET name = ?, type = ?, price = ? WHERE id = ?");
        $stmt->execute([$name, $type, $price, $id]);
    }

    public static function deleteMenu($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM menus WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>