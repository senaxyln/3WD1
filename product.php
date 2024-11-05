<?php

// Definisikan namespace store dengan kelas Product
namespace store {
    class Product {
        public $name;
        public $price;

        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function getInfo() {
            return "Store Product: {$this->name}, Price: {$this->price}";
        }
    }
}

// Definisikan namespace warehouse dengan kelas Product
namespace warehouse {
    class Product {
        public $name;
        public $quantity;

        public function __construct($name, $quantity) {
            $this->name = $name;
            $this->quantity = $quantity;
        }

        public function getInfo() {
            return "Warehouse Product: {$this->name}, Quantity: {$this->quantity}";
        }
    }
}

// Menggunakan kelas dari kedua namespace dengan alias
namespace {
    // Menggunakan use dengan alias untuk menghindari konflik nama
    use store\Product as StoreProduct;
    use warehouse\Product as WarehouseProduct;

    // Membuat objek dari masing-masing kelas
    $storeProduct = new StoreProduct("Laptop", 15000000);
    $warehouseProduct = new WarehouseProduct("Laptop", 100);

    // Menampilkan informasi dari kedua objek
    echo $storeProduct->getInfo() . "<br>";
    echo $warehouseProduct->getInfo() . "<br>";
}