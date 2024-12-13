<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionario Auto</title>
    <link rel="stylesheet" href="style.css"> 
   
   
</head>
<body>
    <header>
        <h1>Concessionario Santantonio</h1>
    </header>
    <main>
        <div class="menu" id="macchine"></div>
        
        <div id="modale-dettagli" class="modale" style="display: none;">
            <div class="modale-contenuto">
                <span class="chiudi-modale" onclick="chiudiModale()">×</span>
                <h2>Dettagli della Macchina</h2>
                <div id="dettaglio"></div> 
            </div>
        </div>
    </main>
    <script src="macchine.js"></script>
    
</body>
</html>