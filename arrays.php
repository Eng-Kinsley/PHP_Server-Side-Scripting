<?php

//traditonal array
/*$guitars = ['Vela', 'Explorer', 'Strat'];

if (isset($guitars[3])) {
    echo $guitars[3];
}else {
    echo 'Guitar does not exist';
}

*/

//associative array
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explore',
    'fender' => 'Strat'
];
//on the left we have keys instead of using indexing
if (isset($guitars2['prs'])) {
    echo $guitars2['prs'];
}else {
    echo 'Guitar does not exist';
}

?>