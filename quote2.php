

$messages = array(
    'This is the first message',
    'This is the second message',
    'This is the third message'
);

echo $messages[rand(0, count($messages) - 1)];
