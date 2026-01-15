#!/bin/bash

IMAGE_NAME="atom_apache_php"
CONTAINER_NAME="portfolio"

# Image
if docker image inspect "$IMAGE_NAME" > /dev/null 2>&1; then
    echo "L'image '$IMAGE_NAME' existe déjà"
else
    echo "L'image '$IMAGE_NAME' n'existe pas. Build en cours..."
    docker build -t "$IMAGE_NAME" -f Dockerfile .

    if [ $? -eq 0 ]; then
        echo "Image '$IMAGE_NAME' créée avec succès"
    else
        echo "Erreur lors du build"
        exit 1
    fi
fi

# Container
if [ "$(docker ps -a -q -f name=^/${CONTAINER_NAME}$)" ]; then
    echo "Conteneur existant trouvé. Démarrage..."
    docker start "$CONTAINER_NAME"
else
    echo "Aucun conteneur trouvé. Création et lancement..."
    docker run -d \
        --name "$CONTAINER_NAME" \
        -p 80:80 \
        -v ./code:/var/www/html:rw \
        "$IMAGE_NAME"
fi

echo "Status du conteneur :"
docker ps -f name="$CONTAINER_NAME"