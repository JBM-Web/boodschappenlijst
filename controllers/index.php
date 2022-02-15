<?php

$groceries = $app ['database']->selectAll('grocery');



require "views/index.view.php";