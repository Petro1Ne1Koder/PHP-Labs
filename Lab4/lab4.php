<?php

 $int = 10;
 $str = "string";
 $arr = [
    'Daniil',
    'age' => 19,
    'array' => ['one', 2.1]
];

 echo 'test $int <br>';
 echo "test $int <br>";
 var_dump($arr);
 echo "<hr>";

if ( $int < 20 && $str != 'string') {
    echo 'true';
} else {
    echo 'false';
}

echo '<br>';
$color = "red";
if ( $str != 'string' || $int >= 9  || $color == "red" ) {
    echo 'true';
} else {
    echo 'false';
}
echo "<hr>";

 
 $arr1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 echo 'foreach: ';
 foreach ( $arr1 as $value ) {
    echo ' ' . $value;
 }
 echo '<br><br>';


 $val = count($arr1);
 echo 'for: ';
 for ( $i = 0; $i <= $val; $i++ ) {
    if ( $i <= 10 ) {
        echo $arr1[$i] . ' ';
    }
 }
 echo '<br><br>';

 $k = 0;
 echo 'while: ';
 while ( $k <= $val ) {
    if ( $k <= 10 ) {
        echo $arr1[$k] . ' ';
        $k++;
    }
}
 echo '<br><br>';

 $names = [
    'Danil' => '19',
    'Petro' => '40',
    'Oleh' => '15',
    'Bohdan' => '17',
    'Den' => '20'
];
 foreach ( $names as $names => $age ) {
    echo "$names is $age old<br>";
 }
 echo '<hr>';

 
 class Person {
    private $name;
    private $age;
    private $sex;

    public function __constuct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function getSex() {
        return $this->sex;
    }
 }

 class Worker extends Person {
    private $job;
    private $exp;

    public function __construct($name, $age, $sex, $job, $exp) {
        parent::__constuct($name, $age, $sex);
        $this->job = $job;
        $this->exp = $exp;
    }

    public function setJob($job) {
        $this->job = $job;
    }

    public function getJob() {
        return $this->job;
    }

    public function setExp($exp) {
        $this->exp = $exp;
    }

    public function getExp() {
        return $this->exp;
    }
 }

 $worker = new Worker('Petro', 40, 'male', 'Artist', '24 years');
 echo $worker->getName();
 echo '<br>' . $worker->getAge();
 echo '<br>' . $worker->getJob();
 echo '<br>' . $worker->getExp();
?>