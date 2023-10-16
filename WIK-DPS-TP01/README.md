# TP 01

# Objectif

Faire un mini site web en RUST répondant à ces critères :
 - 1 page accessible via une requête GET /ping, le body de la réponse sera un json contenant tous les headers contenues dans la requête GET.
 - la page 404 doit être vide
 - le port exposé par défaut est 8080 mais pourra être changé en définissant une variable d'environnement "PING_LISTEN_PORT" (la vérification de la valeur n'est pas demandé)

# Déploiement

### Se déplacer dans ce répo
```
cd WIK-DPS-TP01/
```

### Executer main.rs

```
cargo run
```

Le site est maintenant opérationnel sur le port 8080

# Variable d'environnement

### Set var d'env au lancement

```
export PING_LISTEN_PORT=7000 && cargo run
```

Le site est maintenant opérationnel sur le port 7000