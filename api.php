<?php
header('Content-Type: application/json; charset=UTF-8');

$talk_a = array('Hello', 'How is everything?', 'How are you?', 'How are you doing?', 'How’s everything going?');
$talk_b = array('I’m fine.', 'I’m doing well. Thanks.', 'Not too bad.');

function returnRandomValue($arry) {
  $random_num = rand(0, count($arry) - 1);
  return $arry[$random_num];
}

echo json_encode([
  "status" => "success",
  "talk_a" => returnRandomValue($talk_a),
  "talk_b" => returnRandomValue($talk_b),
])
?>
