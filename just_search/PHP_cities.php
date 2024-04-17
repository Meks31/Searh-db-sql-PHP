<?php

include 'db.php';
$word_search = $_REQUEST['word'];
$search_sql = "SELECT * FROM city WHERE name like '%$word_search%'";
$html = '';
$data = $db->query($search_sql);

$count = ($data->num_rows);
$html .= "<h5>Найдено результатов: $count</h5>";
while ($row = mysqli_fetch_assoc($data)) {
    $html .= "<h6>{$row['name']}</h6>";
}

$array['text'] = $html;
echo json_encode($array);