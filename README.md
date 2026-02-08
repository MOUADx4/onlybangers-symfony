# 🎵 OnlyBangers

![Symfony](https://img.shields.io/badge/Symfony-7.4-black?logo=symfony)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![MySQL](https://img.shields.io/badge/Database-MySQL-orange?logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap)
![License](https://img.shields.io/badge/Project-Academic-success)

---

## 📌 Présentation

**OnlyBangers** est une application web développée avec **Symfony**, réalisée dans le cadre d’un projet pédagogique.  
C’est un **blog dédié au rap américain**, permettant la publication d’articles avec images, la gestion des commentaires, et un espace administrateur sécurisé.

---

## 🎯 Objectifs pédagogiques

- Concevoir une application Symfony complète
- Manipuler une base de données avec Doctrine ORM
- Implémenter l’authentification et les rôles
- Mettre en place un système d’upload d’images
- Respecter l’architecture MVC et les bonnes pratiques Symfony

---

## 🚀 Fonctionnalités

### 🌍 Partie publique
- Consultation des articles
- Page détail d’un article
- Lecture des commentaires
- Ajout de commentaires (utilisateurs connectés)

### 🔐 Authentification
- Inscription / Connexion / Déconnexion
- Gestion des rôles : `ROLE_USER` / `ROLE_ADMIN`

### 🛠 Administration (Back-office)
- CRUD complet des articles
- Upload d’images associées
- Modération des commentaires (validation / suppression)

---

## 🏗 Choix techniques

Le projet suit une architecture professionnelle :

- **MVC Symfony**
  - Modèles : entités Doctrine
  - Vues : templates Twig
  - Contrôleurs : logique applicative

- **Doctrine ORM**
  - Relations entre articles, utilisateurs et commentaires
  - Migrations versionnées

- **Twig + Bootstrap**
  - Layout principal avec `base.html.twig`
  - Interface responsive

- **Sécurité Symfony**
  - Routes protégées avec rôles
  - CSRF activé sur les formulaires sensibles

---

## 🗄 Modèle de données

### Entités principales

- **User**
  - email, password, roles

- **Article**
  - title, content, image, createdAt

- **Commentaire**
  - content, createdAt, author

### Relations Doctrine obligatoires

- Un **Article possède plusieurs Commentaires** → OneToMany  
- Un **Commentaire appartient à un Article** → ManyToOne  
- Un **Utilisateur écrit plusieurs Commentaires** → OneToMany  

---

## 🛠 Technologies utilisées

- PHP 8.2.30
- Symfony 7.4.5
- Doctrine ORM
- Twig
- MySQL
- Bootstrap 5

---

## 📂 Structure du projet

```
onlybangers-symfony/
├── README.md
├── install.sh
├── captures/
├── public/uploads/articles/
├── src/
├── templates/
├── migrations/
```

---

## 📦 Installation

### Prérequis

- PHP >= 8.1
- Composer
- Symfony CLI
- MySQL
- Node.js & npm

---

### Cloner le dépôt

```bash
git clone https://github.com/MOUADx4/onlybangers-symfony.git
cd onlybangers-symfony
```

---

### Configuration base de données

Créer un fichier `.env.local` :

```env
DATABASE_URL="mysql://onlybangers_user:123456@127.0.0.1:3306/onlybangers_db?serverVersion=8.0"
```

---

### Installation rapide

```bash
chmod +x install.sh
./install.sh
```

⚠️ Le script ne supprime pas les données existantes sans confirmation.

---

### Lancer le serveur

```bash
symfony server:start
```

ou

```bash
php bin/console server:run
```

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

- `/`
- `/articles`
- `/article/{id}`
- `/login` / `/logout` / `/register`
- `/admin`
- `/admin/articles`
- `/admin/comments` (modération)

---

## 🖼 Upload des images

Les images sont stockées dans :

```
public/uploads/articles/
```

---

## 📸 Captures d’écran

Aperçu du projet :

### 🏠 Page d’accueil
![Accueil](captures/home.png)

### 🛠 Dashboard Admin
![Admin](captures/admin.png)

---

## 🔐 Sécurité

- Admin protégé par `ROLE_ADMIN`
- Commentaires réservés aux utilisateurs connectés
- CSRF activé sur les formulaires sensibles

---

## 🚧 Difficultés rencontrées

- Gestion de l’upload d’images sécurisé
- Mise en place des relations Doctrine
- Protection du back-office avec permissions
- Ajout d’un système de modération des commentaires

---

## 🌱 Pistes d’amélioration

- Ajouter une **API REST** pour une future application mobile
- Créer une page profil utilisateur pour modifier ses infos personnelles
- Ajouter pagination et système de likes
- Améliorer la modération avec signalements

---

## 🔗 Dépôt GitHub

👉 https://github.com/MOUADx4/onlybangers-symfony

---

## 👨‍💻 Auteur

**BOUNOKRA Mouad**
