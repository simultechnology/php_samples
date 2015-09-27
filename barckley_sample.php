<?php
/**
 * Created by IntelliJ IDEA.
 * User: t_ishikawa
 * Date: 15/09/27
 * Time: 12:28
 */

echo "test!\n";

$start = microtime(true);

$id = dba_open("test_ndbm2", "n", "ndbm");

if (!$id) {
    echo "dba_open failed\n";
    exit;
}

$NUM = 30000;

for ($i = 0; $i < $NUM; $i++) {
    $data = array(
        'first_name' => 'タカツグ',
        'last_name' => 'イシカワ',
        'hobby' => 'afajaklfjgklajfklajflajfglkajfglaflajgflajlkgjalkfjglkafjlkajgfkjalkjlkajfla859838'
    );
    $data = serialize($data);
    dba_insert("key" . $i, $data, $id);
}


for ($i = 0; $i < $NUM; $i++) {
    if (dba_exists("key" . $i, $id)) {
        $val = dba_fetch("key" . $i, $id);
        //var_dump(unserialize($val));

        dba_delete("key", $id);
    }
}


dba_close($id);

$end = microtime(true);
$tm = $end - $start;

echo $tm;