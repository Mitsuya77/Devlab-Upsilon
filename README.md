# upsilon
 
 
##  préparer l’import dans votre
Quelques manipulations vont être nécessaires avant de lancer l’INSTALLER, il ne sera pas nécessaire d’installer WordPress, Duplicator s’occupe de tout.

## créer une base de données

La première chose à faire est de créer une nouvelle base de données et la manière de le faire peut légèrement varier en fonction de la destination de votre site 

```
 . migration au sein d’un hébergement (Procédure pour OVH / Procédure pour 1&1)
 . migration dans un environnement local (via PHPMyAdmin de votre localhost à l’adresse http://localhost:8888/phpMyAdmin/)
```
Veillez à bien noter le nom de la base de données, l’utilisateur et le mot de passe qui seront indispensables pour la suite de la procédure…


## lancer l’installation

c'est de placer les deux fichiers téléchargés à la racine de votre site. Sur une installation locale (avec MAMP, largon), Ensuite, il vous suffit de vous rendre sur l'URL qui exécutera le fichier installer.php . Cela vous redirigera automatiquement vers la première étape de l'importation de votre site avec Duplicator, où vous pourrez vérifier les différentes options. Pour continuer, cochez la case "I have read and accept all terms & notices (required to continue)", puis cliquez sur "Next".

## Renseigner les informations de la base de données

Il vous faut maintenant renseigner les informations de la base de données que vous avez créée. Indiquez l'hôte, le nom de la base, le nom de l'utilisateur et son mot de passe dans les champs correspondants. Ensuite, cliquez sur "Test Database". Si tout est bon, vous pourrez passer à l'étape suivante en cliquant sur "Next".

Duplicator vous demande de confirmer. Cliquez sur "OK".

## Mise à jour des données du site

Sur la page suivante, vérifiez que c'est bien la nouvelle URL qui est indiquée, puis cliquez sur "Next". Vous ne pouvez pas modifier les URLs dans les tables de la base de données avec la version gratuite du plugin

## Retirer les fichiers de Duplicator du site

Ça y est, le processus est presque achevé. Sur la page suivante, Duplicator vous confirme que le site a bien été importé. Il vous demande aussi de faire attention de bien effacer de votre serveur les fichiers installer.php et l'archive ZIP. En effet, les laisser à la racine de votre site est extrêmement dangereux. Pour cette raison, veillez à bien laisser cochée l'option "Auto delete installer files after login (recommended)".

Voilà, vous avez réussi à migrer votre site WordPress :) 
