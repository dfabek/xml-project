<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>XML projekt</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .centar article{
            width: 100%;
            border: 3px solid rgb(42,50,66);
            padding: 10px 0px;
            margin-top:20px;
        }

        .centar article img{
            width:75%;
        }   
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="index.html"><li class="home">Home</li></a>
                <a href="active.php"><li class="active">Active Map Pool</li></a>
                <a href="hostage.php"><li class="hostage">Hostage Rescue Maps</li></a>
                <a href=""><li class="reserve">Reserve Map Pool</li></a>
            </ul>
        </nav>
    </header>

    <div class="centar">
        <h1>Reserve Map Pool</h1>

        <article class="cache">
            <h1>Cache</h1>
            <br />
            <div class="namjestanje">
                <img src="img/cache.jpg" />
                <br />
                <?php
                    $cache = simplexml_load_file("mape.xml");
                    foreach($cache->Cache as $Cache){
                        echo "<p>Creator: " . (string)$Cache->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Cache->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Cache->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Cache->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Cache->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Cache->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="train">
            <h1>Train</h1>
            <br />
            <div class="namjestanje">
                <img src="img/train.jpg" />
                <br />
                <?php
                    $train = simplexml_load_file("mape.xml");
                    foreach($train->Train as $Train){
                        echo "<p>Creator: " . (string)$Train->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Train->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Train->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Train->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Train->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Train->Location . "</p>";
                    }
                ?>
            </div>
        </article>
    </div>

    <footer>
        <p>© Domagoj Fabek 2021.</p>
    </footer>
</body>
</html>