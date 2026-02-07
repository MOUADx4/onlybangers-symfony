#!/bin/bash

# ======================================================================
# INSTALLATION SCRIPT POUR ONLYBANGERS-SYMFONY
# ======================================================================
# Objectif : installer le projet rapidement pour test / correction
# Usage : ./install.sh
# ======================================================================

echo "=============================================="
echo "INSTALLATION DU PROJET ONLYBANGERS-SYMFONY"
echo "=============================================="
echo ""

# 1️⃣ Vérifier que PHP et Composer sont installés
echo "🔹 Vérification de PHP et Composer..."
if ! command -v php &> /dev/null
then
    echo "❌ PHP n'est pas installé. Installez PHP 8+"
    exit
fi

if ! command -v composer &> /dev/null
then
    echo "❌ Composer n'est pas installé. Installez Composer."
    exit
fi

echo "✅ PHP et Composer trouvés."
echo ""

# 2️⃣ Installer les dépendances PHP
echo "🔹 Installation des dépendances Composer..."
composer install
if [ $? -ne 0 ]; then
    echo "❌ Échec de l'installation des dépendances."
    exit
fi
echo "✅ Dépendances installées."
echo ""

# 3️⃣ Créer / mettre à jour la base de données
echo "🔹 Création et mise à jour de la base de données..."
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:migrate --no-interaction
echo "✅ Base de données prête."
echo ""

# 4️⃣ Charger les données de test (fixtures)
echo "🔹 Chargement des données de test..."
php bin/console doctrine:fixtures:load --no-interaction
echo "✅ Fixtures chargées."
echo ""

# 5️⃣ Permissions pour le dossier uploads
echo "🔹 Vérification du dossier uploads..."
mkdir -p public/uploads/articles
chmod 755 public/uploads/articles
echo "✅ Dossier uploads prêt."
echo ""

# 6️⃣ Instructions finales
echo "=============================================="
echo "INSTALLATION TERMINÉE !"
echo "Vous pouvez maintenant lancer le serveur Symfony :"
echo "php -S localhost:8000 -t public"
echo "Et accéder à l'application sur http://localhost:8000"
echo "=============================================="
