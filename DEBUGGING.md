# Commandes de Debugging (Windows / XAMPP)

Voici une liste de commandes utiles pour débuguer votre projet PHP/MySQL dans le terminal.

## 1. Serveur PHP && Logs

Si votre serveur PHP s'arrête ou affiche une page blanche, relancez-le pour voir les erreurs en direct dans le terminal.

```powershell
# Lancer le serveur (Les erreurs s'affichent ici)
C:\xampp\php\php.exe -S localhost:8000 -t .
```

## 2. Vérification Syntaxe PHP

Pour vérifier si un fichier contient des erreurs de syntaxe sans le lancer :

```powershell
# Vérifier un fichier spécifique
C:\xampp\php\php.exe -l nom_du_fichier.php

# Exemple pour index.php
C:\xampp\php\php.exe -l index.php
```

## 3. Base de Données (MySQL)

Pour inspecter la base de données directement :

```powershell
# Se connecter à MySQL (via TCP pour éviter les erreurs de connexion)
C:\xampp\mysql\bin\mysql.exe -h 127.0.0.1 -u root -p

# Une fois connecté :
USE sportdata;
SHOW TABLES;
SELECT * FROM users;
DESCRIBE players;
EXIT;
```

## 4. Vérifier les Logs MySQL

Si la base de données échoue, vérifiez les logs XAMPP :

```powershell
# Afficher les dernières lignes du log d'erreur MySQL
Get-Content -Tail 20 "C:\xampp\mysql\data\mysqld.err"
```

## 5. Vérifier les Ports (Si le serveur ne démarre pas)

Si le port 8000 ou 3306 est occupé :

```powershell
# Trouver ce qui utilise le port 8000
netstat -ano | findstr :8000

# Tuer le processus (remplacer PID par le numéro trouvé)
taskkill /PID <PID> /F
```
