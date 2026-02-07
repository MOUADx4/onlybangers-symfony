# 🎵 OnlyBangers

OnlyBangers est un projet web développé avec **Symfony**, réalisé dans le cadre d’un projet pédagogique.  
Il s’agit d’un **site de blog dédié au rap américain**, permettant la publication d’articles avec images, la gestion des commentaires et un espace d’administration sécurisé.

---

## 🎯 Objectifs pédagogiques

- Mettre en place une application Symfony complète
- Utiliser Doctrine ORM pour la base de données
- Implémenter l’authentification et les rôles
- Gérer l’upload d’images
- Structurer un projet livrable et documenté

---

## 🚀 Fonctionnalités

### Partie publique
- Liste des articles
- Page détail d’un article
- Affichage des commentaires
- Ajout de commentaires (utilisateurs connectés)

### Authentification
- Connexion / Déconnexion
- Gestion des rôles USER / ADMIN

### Administration
- Ajouter un article
- Modifier un article
- Supprimer un article
- Ajouter une image à chaque article

---

## 🛠️ Technologies utilisées

- PHP 8.2.30
- Symfony 7.4.5
- Doctrine ORM
- Twig
- MySQL
- Bootstrap 5
---

## 📂 Structure du projet

onlybangers-symfony/
├── README.md  
├── install.sh  
├── captures/  
├── public/uploads/articles/  
├── src/  
├── templates/  
├── migrations/  

---

## 📦 Installation du projet

### 🔹 Prérequis
- PHP >= 8.1
- Composer
- Symfony CLI
- MySQL
- Node.js & npm

---

### 🔹 Cloner le dépôt

git clone https://github.com/MOUADx4/onlybangers-symfony.git  
cd onlybangers-symfony  

---

## ⚙️ Configuration

Configurer la base de données dans le fichier `.env.local` :

DATABASE_URL="mysql://onlybangers_user:123456@127.0.0.1:3306/onlybangers_db?serverVersion=8.0"

---

## ⚡ Installation rapide

chmod +x install.sh  
./install.sh  

⚠️ Le script ne supprime pas les données existantes sans confirmation.

---

## ▶️ Lancer le serveur

symfony server:start  
ou  
php bin/console server:run  

---

## 👤 Comptes de test

### Administrateur
- Email : admin@onlybangers.local
- Mot de passe : admin123
- Rôle : ROLE_ADMIN

### Utilisateur
- Email : user@onlybangers.com
- Mot de passe : user123
- Rôle : ROLE_USER

---

## 🧭 Routes principales

- /
- /login
- /logout
- /register
- /articles
- /article/{id}
- /admin
- /admin/articles
- /admin/articles/new
- /admin/articles/edit/{id}
- /articles_view


---

## 🖼️ Upload des images

Les images sont stockées dans :

public/uploads/articles/

---

## 📸 Captures d’écran

Les captures sont disponibles dans :
captures/

---

## 🔐 Sécurité

- Accès admin protégé par ROLE_ADMIN
- Commentaires réservés aux utilisateurs connectés
- Routes sécurisées via Symfony Security

---

## 🔗 Dépôt GitHub

https://github.com/MOUADx4/onlybangers-symfony

---

## 📝 Auteur

BOUNOKRA Mouad  
