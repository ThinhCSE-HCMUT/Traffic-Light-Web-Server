<?php
$GLOBALS['modules'] = 'modules';
function loadHeader()
{
    require_once($GLOBALS['modules'] . '/header.php');
}

function loadFooter()
{
    include_once($GLOBALS['modules'] . '/footer.php');
}
