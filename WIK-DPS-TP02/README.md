# TP 02
# Prérequis
Le repo du TP1 (WIK-DPS-TP01), l'API fais en Rust

# Dockerfile en 1 stage

Le Dockerfile en question [ici](/WIK-DPS-TP02/Dockerfile_1_stage/Dockerfile). Comme demandé, il n'y a qu'un seul stage.

### Fonctionnalité : 
- crée une image docker qui execute l'API rust lors du RUN
- ne re-télécharge ni ne re-compile les dépendances lors d'un simple changement dans le code du projet.  
- lance l'API rust avec un user != root

# Dockerfile en 2 stage

Le Dockerfile en question [ici](/WIK-DPS-TP02/Dockerfile_2_stages/Dockerfile). Comme demandé, il y a 2 stage