# TP 02
# Prérequis
Le repo du TP1 (WIK-DPS-TP01), l'API fais en Rust

# Dockerfile en 1 stage

Le Dockerfile en question [ici](/WIK-DPS-TP02/Dockerfile_1_stage/Dockerfile). Comme demandé, il n'y a qu'un seul stage.

### Fonctionnalité : 
- crée une image docker qui execute l'API rust lors du RUN
- ne re-télécharge ni ne re-compile les dépendances lors d'un changement dans le code du projet.  
- lance l'API rust avec un user != root

# Dockerfile en 2 stage

Le Dockerfile en question [ici](/WIK-DPS-TP02/Dockerfile_2_stages/Dockerfile). Avec les même fonctionnalités que le Dockerfile précédent mais composé de 2 stages.  
- Le premier stage pour build.  
- Le deuxième stage pour seulement contenir l'executable qui a été build.


# Procedure d'utilisation

- Télécharger le repo
- déplacer le Dockerfile voulu dans "WIK-DPS-TP01/"
- executer le Dockerfile
```
cd WIK-DPS-TP01/
docker build -t container_name .
```