<?php
$arr = [10,30,40,50,20,70,80,30,90,60];
$new_arr = array_unique($arr);
sort($new_arr);
var_dump(array_slice($new_arr,0,3));
