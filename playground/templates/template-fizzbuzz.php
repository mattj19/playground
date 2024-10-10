<?php /* Template Name: Epic FizzBuzz */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic FizzBuzz</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #1e1e1e;
            color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .fizzbuzz-output {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 10px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .fizzbuzz-item {
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .number { background-color: #2c2c2c; }
        .fizz { background-color: #4caf50; }
        .buzz { background-color: #2196f3; }
        .fizzbuzz { background-color: #f44336; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Epic FizzBuzz</h1>
        <div class="fizzbuzz-output">
            <?php
            /* Epic FizzBuzz Challenge
             * Inspired by Tom Scott's video
             * Originally created by Matt Jones, 23/10/2020 22:00
             */

            $multiples = [
                3 => ['word' => 'Fizz', 'class' => 'fizz'],
                5 => ['word' => 'Buzz', 'class' => 'buzz']
            ];

            $cases = 100;

            // Pre-calculate FizzBuzz results for better performance
            $results = array_fill(1, $cases, '');
            foreach ($multiples as $number => $data) {
                for ($i = $number; $i <= $cases; $i += $number) {
                    $results[$i] .= $data['word'];
                }
            }

            // Output the results with fancy styling
            for ($i = 1; $i <= $cases; $i++) {
                $output = $results[$i];
                $class = $output ? strtolower($output) : 'number';
                echo "<div class='fizzbuzz-item $class'>" . ($output ?: $i) . "</div>";
            }
            ?>
        </div>
    </div>
    <script>
        // Add some interactivity
        document.querySelectorAll('.fizzbuzz-item').forEach(item => {
            item.addEventListener('mouseover', () => {
                item.style.transform = 'scale(1.1)';
            });
            item.addEventListener('mouseout', () => {
                item.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>