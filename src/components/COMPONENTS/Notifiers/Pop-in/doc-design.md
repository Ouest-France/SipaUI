# Pop-ins / Pop-ins

Les pop-ins sont des cadres qui s'affichent au-dessus du contenu d'un site web. A la différence des pop-ups, elles s'ouvrent à l'intérieur d'une page web et peuvent être de tailles et de formes diverses.

## Usage

- Grâce aux pop-ins, l'utilisateur est concentré sur **une petite quantité d'informations** ciblées.
- Les pop-ins **répondent à une brève tâche Utilisateur ou à une simple action**, avec des informations contextuelles.

## Types

3 types de pop-ins existent :
- celles présentes sur mobile
- celles présentes sur desktop avec très peu de contenu, nommées "Small" ?
- celles présentes sur desktop avec plus de contenu, nommées "Large". ?

Image 1 et 2


## Spécifications

### Arrière-plan

- L'arrière-plan permet d'attirer l'attention de l'utilisateur sur la pop-in en assombrissant **le reste de l'écran qui est inaccessible**. L'accès au reste de l'interface utilisateur est désactivé jusqu'à ce qu'une action soit entreprise.
- Il permet la fermeture de la pop-in.
- Il est **obligatoire** sur tous les écrans.
- Couleur : #000000 opacité 60% (btn 40 %) ?


### Container

- Le container **focalise l'attention de l'utilisateur**.
- Il est centré dans l'écran.

Spécifications | Mobile | Desktop Small ? | Desktop Large ?
------------ | ------------- | ------------- | ------------- |
Hauteur | minimum ?px ou contenu + padding ?px | minimum ?px, ou maximum ?px ou contenu + padding ?px | ?
Largeur | celle de la grille sans ses marges | 600px ? | minimum ?px, maximum ?px(ou ?colonnes) ou contenu + padding ?px
Contour | angle 3px à tester ? |  angle 3px à tester ? | angle 3px à tester ?
Couleur | #FFFFFF ? |  #FFFFFF ? | #FFFFFF

### Titre

- Un titre **complète le message**. Il ne peut pas être présent dans une pop-in sans message.
- Il est **facultatif**.
- Un titre ne peut pas être présent sans tout autre élément tel qu'un message ou un composant de formulaire.
- Lorsqu'un scroll est présent, le titre est stiky. Vérifier si ok tech. ?
- La 1re lettre est en majuscule, le reste est en minuscule.
- Il est ferré à gauche.
- Ses paddings sont de 20px. Lorsqu'une croix est présente, le padding à droite est de 0px. ?
- Taille de caractère : 20px ? ou Titre Niveau 2 ?
  - Police du thème
  - Graisse : regular
  - Couleur : #333333 ?

### Message

- Le message est **décrit le contenu** de la pop-in.
- Son contenu est **une brève déclaration ou une question**.
- Il s'agit d'un texte standard ferré à gauche, cf son doc design.

### Bouton

- **Ses spécifications sont disponibles dans son doc design, particulièrement dans "Boutons d'un même sujet".**
- Sur mobile, le ou les boutons sont toujours **pleine largeur**.
- Lorsqu'un scroll est présent, le ou les boutons peuvent être **stikies**. Une marge de 10px ? se trouve au-dessus et au-dessous des boutons stiky le plus haut et le plus bas.
- Le bouton le plus bas est situé à 10 ? px du bas du container. ?

#### Bouton primaire

- **Un bouton primaire est toujours présent** afin de présenter l'action principale de l'utilisateur.

#### Bouton secondaire

- Un à deux boutons secondaires peuvent être affichés.

### Croix

- La croix est un des moyen de fermer la pop-in.
- Elle est **facultative** mais recommandée.
- L’icône est stiky et située avec une marge en haut à droite et en haut à gauche de 10px. ?
- Taille : 20x20px
- Zone de tape : 44x44px
- Par ailleurs, les pop-ins peuvent être fermés via :
  - Les boutons « Annuler » ou « Fermer » de la pop-in.
  - La croix de la pop-in.
  - L'arrière-plan de la pop-in.
  - Le bouton « Précédent » du système ou son raccourci.

### Barre de scroll

- Lorsqu'une pop-in contient beaucoup de contenu, un scroll permet de voir l'ensemble de l'information.
Image 3

### Autres éléments

- Des composants de formulaire peuvent être utilisés : checkboxes, text fields, etc.

## Bonnes pratiques

### Usage

- Les pop-ins sont vivement conseillées pour confirmer définitivement un choix avant un engagement, de sorte que l'utilisateur ait la possibilité de changer d’avis si nécessaire.
- Elles interrompent les utilisateurs. C'est pourquoi, **elles doivent être utilisés avec parcimonie.** Leur rareté permet également d'être pris au sérieux par les utilisateurs.
- Ne pas afficher plusieurs pop-ins en même temps car elles ajoutent une complexité. Les tunnels dans les pop-ins sont à proscrire.
- Les pop-ins ne sont pas appropriées pour les tâches riches en plusieurs étapes. Cette complexité justifie une ou plusieurs pages dédiées.
- Evitez les contenus trop importants et le scroll dans la pop-in.

### Titre

- Dans la mesure du possible, le titre se limite à une seule ligne, même sur mobile.
- Evitez de terminer le titre par un point.

### Message

- Le message doit être direct et dédié à la réalisation d'une seule tâche.
- Les mots, les expressions et les concepts doivent être familiers à l'utilisateur.
- Choisissez un wording impactant pour l'utilisateur.

Image 4 et 5

### Boutons

 - Evitez les boutons de type " En savoir plus " ou des liens qui quittent la pop-in.