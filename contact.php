<?php
include 'header.html'; ?>
		<div id="main" role="main">
			<h1>Contactez nous !</h1>

<p>Vous voulez un devis ? Avez vous une question ? Envoyer nous votre message et nous vous répondrons dans les plus brefs délais</p><br/>

<form role="form"> 

      <label aria-labeledby="nom-et-prenom" for="nom-et-prenom">Nom, Prénom <span class="red">*</span> :</label><br>
      <input aria-required="true" aria-label="nom-et-prenom" role="input" id="nom-et-prenom" name="nom-et-prenom" type="text"><br>

      <label aria-labeledby="email" for="email">Email <span class="red">*</span> :</label><br>
      <input aria-required="true" aria-label="email" role="input" id="email" name="email" type="email"><br>

      <label aria-labeledby="message" for="message">Message:</label><br>
      <textarea aria-label="message" role="input" name="message" id="message"></textarea><br>

      <input role="button" value="Envoyer" type="submit">

</form>
<br/>
<p><span class="red">*</span> Champs obligatoires</p>
		</div>
<?php
include 'footer.html'; ?>