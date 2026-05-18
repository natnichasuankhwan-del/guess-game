<?php
$correct = 36;
?>
<html>
<head><title>Guessing Game for Natnicha Suankhwan bde4e71c</title></head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
if (!isset($_GET['guess'])) {
    echo "Missing guess parameter";
} elseif (strlen(trim($_GET['guess'])) == 0) {
    echo "Your guess is too short";
} elseif (!is_numeric($_GET['guess'])) {
    echo "Your guess is not a number";
} elseif (intval($_GET['guess']) < $correct) {
    echo "Your guess is too low";
} elseif (intval($_GET['guess']) > $correct) {
    echo "Your guess is too high";
} else {
    echo "Congratulations - You are right";
}
?>
</p>
</body>
</html>
