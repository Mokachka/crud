<?php

require_once 'model/model.php';

$rows = findALL();

require_once  'view/indexTemplate.php';