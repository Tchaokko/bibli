<!DOCTYPE html>
<html>
    <head>
	<meta = charset = "utf-8" />
        <title>Ok let's rock</title>
    </head>
    <body>

     	<h1> Les balise de base de html </h1>
		<p> Bon la c'est pour faire des test mais j'aime bien vim, </br> 
		du moins l'interface </p>
		<p> pourquoi ça fait des truc cheliou en haut? c'esgt pas un titre...</p> 
		<p> <strong> Strong cette fois </strong>
		<p> <em>encore un test avec /em </em> </p> 
		<p> <mark> un invité de marque! </marque> </p>

	<h2 id ="mon ancre">Les autres balise plutot cool </h2>
		<ul> 
		<li> Une tite liste</li>
		<li> On continue un peu 
			<ul>
			<li> allez on est chaud!</li>
			</ul>
		</li>
		</ul>
		<ol>
		<li> La c'est avec des numéros!</li>
		<li> regarde comme c'est beau </li>
		</ol>

	<h3> Les balise pour les liens </h4>
	<a href="page2.php"> Deuxième page</br></a>
	<a href="http://en.wikipedia.org/wiki/Aftermath:_Population_Zero" title="Wiki=op">Page wiki op </br></a>
	<a href="http://en.wikipedia.org/wiki/Aftermath:_Population_Zero" title="Dans une nouvelle fenêtre" target="_blank">wiki dans une autre fenêtre </br></a>
	<a href="#mon ancre"> Allez vers ancre </br></a>
	<a href="mailto:tchaokko@gmail.com">Envoyez moi un mail</br></a>
	<a href="monfichier.zip">Fichier.zip</a>
	<h4> Maintenant on va voir les images </h4>

	<p><img src="boobs.gif" alt= "gif rigolo" title= "Yup..."/></p> <!--image simple-->
	<p><a href="boobs.gif"><img src="boobs.gif" alt= "lien vers gi rigolo" title= "Cliquer pour agrandir"/></a></p> <!--Image avec lien sur plus grande-->

	<figure>
	 <img src="bloc_note.png" alt="bloc note"/>
	 <figcaption>Le logiciel bloc note </figcaption>
	</figure>

	<table>
	 <caption>Titre du tableaux</caption>
	<thead> <!--En tete du tableau--!>
	 <tr><!--Ligne--!>
	  <th>En tête</th>
	  <td>Cellule</td>
	 </tr><!--Ligne--!>
	</thead>

        <tfoot> <!--Fin du tableau--!>
         <tr><!--Ligne--!>
          <th>En tête</th>
          <td colspan="2">Cellule</td> <!--permet de fusionner cellule horizontalement --r!>
         </tr><!--Ligne--!>
        </tfoot>

        <tbody> <!--Corp du tableau--!>
         <tr><!--Ligne--!>
          <th>En tête</th>
          <td rowspan="2">Cellule</td> <!--permet de fusionner cellule verticalement --!>
         </tr><!--Ligne--!>
        </tbody>

	</table>
	<h5> la ça sert a rien </h5>
	<h6> bon pourquoi pas écrire tout court hein? </h6> 
  </body>
</html>
