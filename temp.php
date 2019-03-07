<?php

//$collection = new Collection([
$users = new Collection([
    'one', 'two', 'three'
]);

echo $collection->count();

foreach ($users as $user) {
    echo $user->getEmail();
}