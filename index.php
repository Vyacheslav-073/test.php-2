<?php

$listBucs = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц", "Анна Каренина", "Сто лет одиночества", "Тень горы", "Атлант расправил плечи");

echo "<strong>Список книг:</strong>";
echo "<ol>";

for ($i = 0; $i < count($listBucs); $i++) {
    
    echo "<li> $listBucs[$i] </li>";
}

echo "</ol>";

$books = array(
    "Рей Брэдбери - книга первая" => "451° по Фаренгейту",
    "Грегори Дэвид Робертс - книга первая" => "Шантарам",
    "Джордж Оруэлл" => "1984",
    "Михаил Афанасьевич Булгаков" => "Мастер и Маргарита",
    "Эрих Мария Ремарк" => "Три товарища",
    "Оскар Уайльд" => "Портрет Дориана Грея",
    "Рей Брэдбери - книга вторая" => "Вино из одуванчиков",
    "Даниел Киз" => "Цветы для Элджернон",
    "Джером Д. Сэлинджер" => "Над пропастью во ржи",
    "Антуан де Сент-Экзюпери" => "Маленький принц",
    "Лев Толстой" => "Анна Каренина",
    "Габриэль Гарсиа Маркес" => "Сто лет одиночества",
    "Грегори Дэвид Робертс - книга вторая" => "Тень горы",
    "Айн Рэнд" => "Атлант расправил плечи",
);

echo "<strong>Автор => Название книги: </strong>";
echo "<ol>";

foreach ($books as $author => $bookName) {
    echo "<li>$author => $bookName<br></li>";
}

echo "</ol>";

?>