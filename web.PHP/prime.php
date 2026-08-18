<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers in Range</title>
</head>
<body>
    <h2>Find Prime Numbers in a Range</h2>
    <form method="post">
        Lower Limit: <input type="number" name="lower" required><br><br>
        Upper Limit: <input type="number" name="upper" required><br><br>
        <input type="submit" value="Find Primes">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lower = $_POST['lower'];
        $upper = $_POST['upper'];

        echo "<h3>Prime numbers between $lower and $upper:</h3>";

        // Function to check prime
        function isPrime($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        for ($n = $lower; $n <= $upper; $n++) {
            if (isPrime($n)) {
                echo $n . " ";
            }
        }
    }
    ?>
</body>
</html>
