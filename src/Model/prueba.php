<?php

namespace Model;

 class prueba {

public function __construct(int $age) {
$this->age = $age;
}

public function isAnAdult(): bool{
return $this->age >= 47;
}
}