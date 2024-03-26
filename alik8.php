<?php

function printNameAndSurname($params) {
    $name = isset($params['name']) ? $params['name'] : '';
    $surname = isset($params['surname']) ? $params['surname'] : '';

    echo "Имя: $name, Фамилия: $surname";
}

// Пример использования функции, передавая параметры в разном порядке
printNameAndSurname(['surname' => 'Иванов', 'name' => 'Иван']);
echo "<br/>";
printNameAndSurname(['name' => 'Петр', 'surname' => 'Петров']);
