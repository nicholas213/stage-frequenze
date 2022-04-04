<?php 
$PAGE = 'contattaci';
include('header.php'); ?>
<div class="grid-x">
  <div class="cell small-12 cell-text">
    <h1>Contattaci</h1></div>  
</div>

<div class="cell small-12 medium-4">      
  <div class="grid-x">
    <div class="cell cell-text">
      <p>Per qualsiasi informazione e richiesta, potete compilare il modulo sottostante.
      </p>
    </div>
  </div>
</div>

<form>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-4 cell">
        <label>Nome *
          <input type="text">
        </label>
      </div>
      <div class="medium-4 cell">
        <label>Cognome
          <input type="text">
        </label>
      </div>
    </div>
  </div>

<div class="grid-x grid-padding-x">
  <div class="medium-8 cell">
    <label>Email *
      <input type="text">
        <div class="sub-text">
          Inserisci il tuo indirizzo email, così possiamo tenerti aggiornato.
        </div>
    </label>
  </div>
</div>

<div class="grid-x grid-padding-x-1">
  <fieldset class="large-5 cell">
    <legend>Per quale dipartimento hai dei suggerimenti? *</legend>
    <input type="radio" name="pokemon" value="Red" id="pokemonRed" required>
      <label for="pokemonRed">
        Consigli e suggerimenti
      </label><br>
    <input type="radio" name="pokemon" value="Blue" id="pokemonBlue">
      <label for="pokemonBlue">
        Collaborazione
      </label><br>
    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow">
      <label for="pokemonYellow">
        Advertising
      </label><br>
    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow">
      <label for="pokemonYellow">
        Segnalazione Notizie
      </label><br>
    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow">
      <label for="pokemonYellow">
        Altro
      </label>
  </fieldset>
</div>

    <div class="grid-x grid-padding-x">
      <div class="medium-8 cell">
        <label>Oggetto *
          <input type="text">
        </label>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="medium-8 cell">
        <label>Messaggio *
          <textarea cols="80" rows="10"></textarea>
        </label>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
      <div class="medium-12 cell">
        <input id="checkbox12" type="checkbox">
          <label for="checkbox12">
            Dichiaro di aver preso visione dell’informativa riportata alla pagina “Privacy Policy” e di dare il mio consenso al trattamento dei dati personali secondo Dlgs 196/2003
          </label>
      </div>
    </div>

        <div class="grid-x grid-padding-x">
        <div class="medium-12 cell">
        <a href="about.html" class="button">Invia</a>
      </div>
    </div>
  </div>
</form>










</div>






<?php include('footer.php'); ?>

