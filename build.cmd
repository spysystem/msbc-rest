del /s /q docs lib test

docker pull spysystem/openapi-generator:th-spy-master-dev
docker run^
    --rm^
    -v "%cd%":/local^
    spysystem/openapi-generator:th-spy-master-dev^
    generate^
    -g php^
    -i /local/src/msbc.yaml^
    -o /local^
    -c /local/config.yaml

git add docs/*
git add lib/*
git add test/*
