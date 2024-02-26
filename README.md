# e-commerce-PHP

Ce site d'e-commerce à été réaliser par Adriana Pullig, Albéric Walsh De Serrant et Yann Fournier dans le cadre d'un projet de deuxième année.

## Configuration

#### Xampp

- Télécharger et installer [Xampp](https://www.apachefriends.org/download.html)
- Cloner ou télécharger le zip du repository dans le dossier "C:\xampp\htdocs\"
- Lancer les servers Apache et MySQL
- Appuyer sur le bouton admin sur la ligne du server MySQL. Cela vous permettra d'accéder à "phpmyadmin" et de configurer la bdd. 

#### BDD

- Créer une nouvelle base de données sur phpmyadmin nommée "projet-ecommerce"
- Importer le fichier "C:\xampp\htdocs\e-commerce-PHP\bdd\script.sql"
- Puis ce placer dans le dossier 'C:\xampp\htdocs\e-commerce-PHP\bdd' et lancer le script fakerFromJSON.py (Veillez à télécharger les bibliothèque python qui ce trouvent dans le "requirements.txt")

#### Boite Mail

Mailhog vous permettra de recevoir le mail d'activation de votre compte ainsi que vos facture.

- Télécharger [MailHog](https://github.com/mailhog/MailHog/releases/tag/v1.0.1),
- Lancez le fichier.exe que vous venez de télécharger,
- Ouvrez votre navigateur et aller sur: http://localhost:8025/

#### La configuration du site est enfin fini. Voici son url: http://localhost/e-commerce-php/home.php

---

#### Code Promo

- YANN:        -5%
- ALBERIC:     -10%
- ADRIANA:    -20%
- AUCUN, aucun, none, NONE:  -0% (Permet d'annuler l'utilisation d'un code promo)