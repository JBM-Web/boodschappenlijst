<?php


$app['database']->insert('grocery', [
'Name'=> $_POST['name'],
'Price'=>$_POST['price'],
'Amount'=>$_POST['amount']
]);

header('Location: /groceries');