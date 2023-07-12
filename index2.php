//bài tập Abstract:
//bài 1
<?php
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle extends Shape {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(7);
echo "Circle Area: " . $circle->calculateArea() . "\n";


$rectangle = new Rectangle(6, 10);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
?>
//bài2
<?php
abstract class Animal {
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound() {
        echo "woof woof!";
    }
}
class Cat extends Animal {
    public function makeSound() {
        echo "Meo meo!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Gâu gâu!
$cat = new Cat();
$cat->makeSound(); // Output: Meo meo!
?>
//bài3
<?php
abstract class Employee {
    abstract public function name();
    abstract public function salary();
}
class Manager extends Employee {
    protected $name;
    protected $salary;
    public function __construct($name, $salary) {
      $this->name = $name;
      $this->salary = $salary;
    }
    public function name() {
    // echo $this->name;
        }
    public function salary() {
        // echo $this->salary;
        }
    public function getInf() {
        echo $this->name;
        echo $this->salary;
        }
  }
class Staff extends Employee {
 public function __construct($name, $salary) {
    $this->name = $name;
    $this->salary = $salary;
}
    public function name() {
        // echo $this->name;
            }
    public function salary() {
        // echo $this->salary;
    }
    public function getInf() {
        echo $this->name;
        echo $this->salary;
        }
}
$less3_1 = new Manager("toan", "10tr");
$less3_2 = new Staff("toan", "10tr");
echo $less3_1->getInf()."<br>";
echo $less3_2->getInf()."<br>";
?>
//bài4
<?php
abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start() {
        echo "Car is starting the engine.\n";
    }
}
class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle is kick-starting.\n";
    }
}

$car = new Car();
$car->start();
$motorcycle = new Motorcycle();
$motorcycle->start(); 
?>
//bài5
<?php
abstract class Database {
    abstract public function connect();
    abstract public function query($query, $params = []);
    abstract public function disconnect();
}
class MySQLDatabase extends Database {
	
        public	$isConn;
        protected	$datab;
        
        //CONNECT TO DB
        public	function connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = [])
        {
            $this->isConn = TRUE;
            try {
                $this->datab = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, $options);
                $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e){
                throw new Exception($e->getMessage());
            }
        }
        
        public	function	disconnect()
        {
            $this->isConn = FALSE;
            $this->datab = NULL;
        }
        
        public	function	query($query, $params = [])
        {
            try {
                $stmt = $this->datab->prepare($query);
                $stmt->execute($params);
                return TRUE;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

// $query = "INSERT INTO products (name, price, category_id) VALUES (:name, :price, :ca_id)";
// $params = ['name'=>'Dep', 'price'=>'25.100', 'ca_id'=>3];
// $less5_1 = new MySQLDatabase();
// $less5_1->connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = []);
// $less5_1->query($query, $params)."<br>";
// $less5_1->disconnect();
?>
//Bài tập Interface:
//bài1
<?php
interface Resizable {
    public function resize($percentage);
}
class Rectangle implements Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= (1 + ($percentage / 100));
        $this->height *= (1 + ($percentage / 100));
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

$rectangle = new Rectangle(15, 2);
echo "Original Width: " . $rectangle->getWidth() . "\n"; 
echo "Original Height: " . $rectangle->getHeight() . "\n"; 

$rectangle->resize(50);
echo "Resized Width: " . $rectangle->getWidth() . "\n"; 
echo "Resized Height: " . $rectangle->getHeight() . "\n"; 
?>
//bài2
<?php
interface Logger {
    public function logInfo();
    public function logWarning();
    public function logError();
  }
  class FileLogger implements Logger {
    public function logInfo() {
  
    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
  }
  class DatabaseLogger implements Logger {
    public function logInfo() {
  
    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
  }
  $FileLogger = new FileLogger("bug...1");
  $DatabaseLogger = new DatabaseLogger("bug...2");
  echo $FileLogger->getLog(). "<br>";
  echo $DatabaseLogger->getLog(). "<br>";
?>
//bài3
<?php
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    private $radius;


    public function __construct($radius) {
        $this->radius = $radius;
    }


    public function draw() {
        echo "Drawing a circle with radius $this->radius.\n";
    }
}

class Square implements Drawable {
    private $sideLength;


    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }


    public function draw() {
        echo "Drawing a square with side length $this->sideLength.\n";
    }
}

$circle = new Circle(5);
$circle->draw(); 

$square = new Square(10);
$square->draw();
?>
//bài4
<?php
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}
$arraySorter = new ArraySorter([1,6,2,4,9]);
$sortedArray = $arraySorter->sort();
echo "Array after sorting: " . implode(", ", $sortedArray);
?>
//bài5
<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using AES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting AES encrypted data...";
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using DES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting DES encrypted data...";
    }
}

$aes = new AES();
$aes->encrypt("Data to encrypt"); 
$aes->decrypt("Encrypted data"); 
echo "<br>";
$des = new DES();
$des->encrypt("Data to encrypt"); 
$des->decrypt("Encrypted data");
?>
