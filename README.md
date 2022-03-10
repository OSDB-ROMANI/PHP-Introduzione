# PHP-Introduzione
PHP è un liguaggio di scripting interpretato rivolto allo sviluppo di applicazioni web dinamiche, utilizzato principalmente per lo sviluppo di applicazioni lato server.</br>
<h2>Caratteriste del linguaggio</h2>
<li>I file vanno salvati con l'estensione php</li>
<li>E' possibili incorporare il codice php in una pagina html o l'incontrario (esempio_1.php, esempio_2.php)</li>
<li>Il codice php deve essere compreso tra il tag di apertura <?php e il tag di chiusura ?></li>
<li>Ogni istruzione deve terminare con un punto e virgola (;)</li>
<li>VARIABILI</li>
  <ol>
    <li>PHP è debolmente tipicizzato, non occorre definire il tipo di una variabile ma viene assegnato dall'interprete dinamicamente.</li>
    <li>Una varibile deve sempre iniziare con il simbolo del dollaro ($).</li>
    <li>Il primo carattere dopo il $ non può mai essere un numero.</li>
    <li>I caratteri ammessi nel nome di una variabile sono A-Z,a-z,0-9 e _</li>
    <li>I nomi delle variabili sono case-sensitive, c'è differenza tra minuscolo e maiuscolo</li>
    <li>Per assegnare un valore a una variabile si utilizza il simbolo uguele (=) che espreime l'assegnamento</li>
    <li>Per passare una variabile per riferimento si utilizza il simbolo della e commerciale (&), vedi esempio_3.php</li>
  </ol>
<li>STRINGHE</li>
  <ol>
    <li>Utilizzare i doppi apici " --> "ciao mondo".</li>
    <li>Utilizzare apici singolo ' --> 'ciao mondo'.</li>
    <li>Differenze</li>
    <ul>
      <li>Gli apici singoli definiscono esattamente il contenuto, senza interpretare eventuali variabili.</li>
      <li>I doppi apici interpretano eventuali variabili sostituendole con il loro contenuto.</li>
      <li>esempio_4.php</li>
    </ul>
  </ol>
<li>ARRAY</li>
  <ul>
    <li>Sono strutture dinamiche</li>
    <li>Sono gestiti come chiave valore (mappe associative)</li>
    <li>E' possibile creare il classico array con chiave numerica</li>
    <li>E' possibile creare un array con chiave anche non merica, detto array associativo</li>
    <li>Per creare un'array si utilizza la parola riservata array()</li>
    <li>Allinterno delle parentesi tonde possiamo inserire:</li>
      <ul>
        <li>Valori separati dal simbolo della virgola (,)</li>
        <li>Chiave valore, utilizzando il simbolo => per associare a una chiava il valore corrispondente tutti separato dalla virgola (,)</li>
      </ul>
    <li>esempio_5.php</li>
  </ul>
