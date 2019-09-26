<?php

function hook_test(){
    echo "<h1 style='text-align: center'>Function 121231212312</h1>";
}
add_action("init", "hook_test");
