<?php include 'header.html'; ?>
<table summary="Tableau modifiable présentant les oeuvres de plusieurs réalisateurs de films, plusieurs oeuvres par réaliasateur sont possibles, accompagnés de leur date de réalisation, titre et genre filmique." id="megaTab">
  <caption>Liste non exhaustive de films</caption>
  <tbody>
    <tr>
      <th id="l1c1">Realisateur</th>
      <th id="l1c2">Titre du film</th>
      <th id="l1c3">Année de réalisation</th>
      <th id="l1c4">Genre</th>
    </tr>
    <tr>
      <th id="l2c1" headers="l1c1" rowspan="2">David Lynch</th>
      <th id="l2c2" headers="l1c2 l2c1">Lost Highway</th>
      <td tabindex="40" id=1 headers="l1c3 l2c1 l2c2">Champs php</td>
      <td tabindex="50" id=2 headers="l1c4 l2c1 l2c2">Champs php</td>
    </tr>
    <tr>
      <th id="l3c2" headers="l1c2 l2c1">Blue Velvet</th>
      <td tabindex="60" id=3 headers="l1c3 l2c1 l3c2">Champs php</td>
      <td tabindex="70" id=4 headers="l1c4 l2c1 l3c2">Champs php</td>
    </tr>
  </tbody>
</table>
<?php include 'footer.html'; ?>