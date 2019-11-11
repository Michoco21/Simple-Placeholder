<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <h1>Commandes VI</h1>
 <div class="ligne1">
   <h2>Déplacement dans un fichier</h2>
    <h3>Déplacement à l'aide des flèches</h3>
    <ul>
      <li>La touche h pour vous déplacer vers la gauche.</li>
      <li>La touche l pour vous déplacer vers la droite.</li>
      <li>La touche j pour vous déplacer vers le bas.</li>
      <li>La touche k pour vous déplacer vers le haut.</li>
    </ul>

    <h3>Déplacement mot par mot</h3>
    <ul>
      <li>Appuyez sur w ("word") pour déplacer le curseur mot par mot vers la droite.</li>
      <li>Appuyez sur b ("back") pour déplacer le curseur mot par mot vers la gauche.</li>
      <li>Appuyez sur W ou sur B pour déplacer le curseur du signe de ponctuation le plus proche au blanc suivant ou précédent.</li>
      <li>Appuyez sur e ("end") pour positionner le curseur sur le dernier caractère du mot en cours.</li>
    </ul>

    <h3>Déplacement vers le début ou la fin d'une ligne</h3>
    <ul>
      <li>Appuyez sur ^ pour amener le curseur au début de la ligne en cours.</li>
      <li>Appuyez sur $ pour amener le curseur à la fin de la ligne en cours.</li>
    </ul>

    <h3>Déplacement ligne par ligne</h3>
    <ul>
      <li>Appuyez sur la touche Return pour positionner le curseur au début de la ligne suivante.</li>
    </ul>

    <h3>Déplacement vers la gauche</h3>
    <ul>
      <li>Appuyez sur la barre d'espacement pour déplacer le curseur d'un caractère vers la droite.</li>
    </ul>

    <h3>Déplacement vers la droite</h3>
    <ul>
      <li>Appuyez sur la barre d'espacement pour déplacer le curseur d'un caractère vers la droite.</li>
    </ul>

    <h3>Déplacement vers le haut</h3>
    <ul>
      <li>Appuyez sur H ("high") pour amener le curseur en haut de l'écran.</li>
    </ul>

    <h3>Déplacement vers le centre</h3>
    <ul>
      <li>Appuyez sur M ("middle") pour amener le curseur au centre de l'écran.</li>
    </ul>

    <h3>Déplacement vers le bas</h3>
    <ul>
      <li>Appuyez sur L ("low") pour amener le curseur en bas de l'écran.</li>
    </ul>
  </div>

  <div class="ligne2">
    <h2>Pagination et défilement</h2>
    <h3>Défilement d'une page-écran</h3>
    <p>Pour faire défiler une page-écran vers le bas, appuyez sur Ctrl-F ("Forward"). (Maintenez la touche Control enfoncée et appuyez sur la touche F.) Le curseur se positionne dans le coin supérieur gauche du nouvel écran.</p>

    <h3>Défilement d'un demi-écran vers l'avant</h3>
    <p>Pour faire défiler un demi-écran vers le bas, appuyez sur Ctrl-D ("Down").</p>

    <h3>Défilement d'un écran vers l'arrière</h3>
    <p>Pour faire défiler en arrière (vers le haut) une page-écran, appuyez sur Ctrl-B.</p>

    <h3>Défilement d'un demi-écran vers l'arrière</h3>
    <p>Pour faire défiler en arrière un demi-écran, appuyez sur Ctrl-U.</p>
  </div>

  <div class="ligne3">
    <h2>Insertion de texte</h2>
    <h3>Ajout</h3>
    <ul>
      <li>La commande a (ajout) permet d'insérer du texte à la droite du curseur. Positionnez le curseur sur une ligne, tapez a, puis le texte à ajouter. Appuyez sur Esc lorsque vous avez terminé.</li>
      <li>La commande A permet d'insérer du texte à la fin d'une ligne. Positionnez le curseur sur une ligne de texte, puis tapez A. Le curseur est renvoyé à la fin de la ligne, où vous pouvez insérer votre texte. Appuyez sur Esc lorsque vous avez terminé.</li>
    </ul>
    <h3>Insertion</h3>
    <ul>
      <li>Vous pouvez insérer du texte à la gauche du curseur en tapant i en mode commande.</li>
      <li>La commande I permet d'insérer du texte en début de ligne. (Elle ramène le curseur en début de ligne, quelle que soit sa position sur la ligne.) Comme pour toutes les commandes décrites dans cette section, vous devez appuyer sur Esc pour repasser en mode commande après avoir entré le texte à insérer.</li>
    </ul>
    <h3>Ouverture de lignes</h3>
    <ul>
      <li>Tapez o pour ouvrir une ligne au-dessous de la position courante du curseur, puis insérez, au besoin, quelques lignes de texte. Appuyez sur Esc lorsque vous avez terminé.</li>
      <li>Tapez o pour ouvrir une ligne au-dessous de la position courante du curseur, puis insérez, au besoin, quelques lignes de texte. Appuyez sur Esc lorsque vous avez terminé.</li>
    </ul>
  </div>

<div>
<ul>
  <li>0	Aller en début de ligne</li>
  <li>$	Aller en fin de ligne</li>
  <li>k	Ligne précédente</li>
  <li>j	Ligne suivante</li>
  <li>h	Caractère précédent</li>
  <li>l	Caractère suivant</li>
  <li>b	Mot précédent</li>
  <li>w	Mot suivant</li>
  <li>Ctrl-B	Page précédente</li>
  <li>Ctrl-F	Page suivante</li>
  <li>nG	Aller à la ligne n. Exemple: 1G va sur la première ligne</li>
  <li>G	Aller à la dernière ligne</li>
  <li>x	Supprime le caractère sous le curseur</li>
  <li>dd	Supprime la ligne courante et la copie dans le presse-papiers</li>
  <li>nd	Idem avec n lignes</li>
  <li>J	Fusionne la ligne courante et la suivante</li>
  <li>yy	Copie la ligne courante dans le presse-papiers</li>
  <li>ny	Idem avec n lignes</li>
  <li>P	Colle le presse-papiers avant la position courante</li>
  <li>p	Colle le presse-papiers après la position courante</li>
  <li>v	Commence une sélection en mode caractères</li>
  <li>V	Commence une sélection en mode lignes</li>
  <li>Ctrl-V	Commence une sélection en mode "rectangulaire"</li>
  <li>d	Supprime la sélection et la copie dans le presse-papiers</li>
  <li>y	Copie la sélection dans le presse-papiers</li>
  <li>c	Supprime la sélection et passe en mode insertion</li>
  <li>i	Passe en mode insertion avant la position courante</li>
  <li>a	Passe en mode insertion après la position courante</li>
  <li>o	Passe en mode insertion sur une nouvelle ligne sous la ligne courante</li>
  <li>Esc	Quitte le mode insertion</li>
  <li>u	Annule la dernière commande</li>
  <li>r	Remplace le caractère sous le curseur par le prochain caractère tapé</li>
  <li>~	Convertit le caractère sous le curseur en majuscule si c'est une minuscule et vice-versa</li>
  <li>/texte	Recherche en avant du texte indiqué</li>
  <li>?texte	Recherche en arrière du texte indiqué</li>
  <li>n	Recherche l'occurrence suivante</li>
  <li>N	Recherche l'occurrence précédente</li>
  <li>:%s/chercher/remplacer	Recherche avec remplacement dans tout le fichier</li>
  <li>:w	Sauvegarde le fichier courant</li>
  <li>:wfichier	Ecrit le document dans le fichier indiqué</li>
  <li>:rfichier	Inclut le fichier indiqué à partir de la position courante</li>
  <li>:q!	Quitter en annulant les modifications</li>
  <li>ZZ (ou :wq)	Quitter en enregistrant les modifications</li>
</ul>
</div>
