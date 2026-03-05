<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada do 5</title>
    
    <style>
        
        body {
            margin: 0;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: #f2f2f2;
        }
        
        .container {
            background-color: white;
            width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2)
        }
        
        p {
            font-size: 18px;
        }
        
        </style>
</head>
<body>

    <div class="container">
        <h1>Tabuada do 5</h1>

        <?php 
            $numeros = range(1,10);

            foreach($numeros as $numero) {
                echo "<p> 5 x $numero =" . (5 * $numero) . "</p>";
            }
        ?>
    </div>
    
</body>
</html>