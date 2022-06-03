<!--<a href="task_1.php">tack-1</a>-->
<?php
$dir = glob("*.php");

foreach ($dir as $item) {
    echo "<a href=\"{$item}\">{$item}</a><br>";
}
