# SlamSync

SlamSync est une application web de gestion d'équipes de basketball, permettant le suivi des résultats de matchs et intégrant un système de pronostics avec classement entre les utilisateurs. 

Ce projet a été développé en complement de ma formation en BTS SIO (option SLAM) afin de consolider les compétences en développement backend et en conception d'interfaces interactives.

## Fonctionnalités Principales

*   **Authentification et Sécurité :** Système complet de création de compte, connexion et déconnexion sécurisées, incluant la validation des données et l'envoi d'emails de bienvenue via SMTP.
*   **Gestion des Équipes :** Consultation des équipes du tournoi .
*   **Suivi des Matchs :** Affichage des rencontres et des résultats.
*   **Système de Pronostics (Leaderboard) :** Espace permettant aux utilisateurs connectés d'effectuer des pronostics sur les matchs et de se positionner dans un classement général.
*   **Espace Utilisateur :** Interface dédiée avec protection des routes (accessibles uniquement aux utilisateurs authentifiés).

## Technologies Utilisées

*   **Framework Backend :** Laravel (PHP)
*   **Frontend :** Blade, DaisyUI(basée sur tailwind css)
*   **Base de données :** MySQL
*   **Environnement et Déploiement :** Docker / Docker Compose

## Prérequis
Avant de commencer, assurez-vous de disposer des éléments suivants sur votre machine :
*   Docker et Docker Compose (ou PHP 8.x et Composer si utilisation en local)
*   Git

## Installation et Configuration

1. Cloner le dépôt de l'application
``bash
git clone [https://github.com/madwest72/SlamSync.git](https://github.com/madwest72/SlamSync.git)
cd slamsync