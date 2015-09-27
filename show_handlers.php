<?php
/**
 * Created by IntelliJ IDEA.
 * User: t_ishikawa
 * Date: 15/09/27
 * Time: 13:05
 */
echo "Available DBA handlers:\n";
$handlers = dba_handlers();
for ($i = 0; $i < count($handlers); $i++) {
    echo $handlers[$i] . "\n";
}