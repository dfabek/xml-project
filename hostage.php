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
                <a href=""><li class="hostage">Hostage Rescue Maps</li></a>
                <a href="reserve.php"><li class="reserve">Reserve Map Pool</li></a>
            </ul>
        </nav>
    </header>

    <div class="centar">
        <h1>Hostage Rescue Maps</h1>

        <article class="agency">
            <h1>Agency</h1>
            <br />
            <div class="namjestanje">
                <img src="img/agency.jpg" />
                <br />
                <?php
                    $agency = simplexml_load_file("mape.xml");
                    foreach($agency->Agency as $Agency){
                        echo "<p>Creator: " . (string)$Agency->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Agency->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Agency->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Agency->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Agency->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Agency->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="assault">
            <h1>Assault</h1>
            <br />
            <div class="namjestanje">
                <img src="img/assault.jpg" />
                <br />
                <?php
                    $assault = simplexml_load_file("mape.xml");
                    foreach($assault->Assault as $Assault){
                        echo "<p>Creator: " . (string)$Assault->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Assault->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Assault->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Assault->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Assault->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Assault->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="italy">
            <h1>Italy</h1>
            <br />
            <div class="namjestanje">
                <img src="img/italy.jpg" />
                <br />
                <?php
                    $italy = simplexml_load_file("mape.xml");
                    foreach($italy->Italy as $Italy){
                        echo "<p>Creator: " . (string)$Italy->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Italy->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Italy->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Italy->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Italy->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Italy->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="militia">
            <h1>Militia</h1>
            <br />
            <div class="namjestanje">
                <img src="img/militia.png" />
                <br />
                <?php
                    $militia = simplexml_load_file("mape.xml");
                    foreach($militia->Militia as $Militia){
                        echo "<p>Creator: " . (string)$Militia->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Militia->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Militia->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Militia->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Militia->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Militia->Location . "</p>";
                    }
                ?>
            </div>
        </article>

        <article class="office">
            <h1>Office</h1>
            <br />
            <div class="namjestanje">
                <img src="img/office.png" />
                <br />
                <?php
                    $office = simplexml_load_file("mape.xml");
                    foreach($office->Office as $Office){
                        echo "<p>Creator: " . (string)$Office->Creator . "</p><br />";
                        echo "<p>Scenario: " . (string)$Office->Scenario . "</p><br />";
                        echo "<p>Counter-Terrorists: " . (string)$Office->CounterTerrorists . "</p><br />";
                        echo "<p>Terrorists: " . (string)$Office->Terrorists . "</p><br />";
                        echo "<p>Theme: " . (string)$Office->Theme . "</p><br />";
                        echo "<p>Location: " . (string)$Office->Location . "</p>";
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