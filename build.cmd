del /s /q docs lib test

docker pull spysystem/openapi-generator:th-spy-master
docker run^
    --rm^
    -v "%cd%":/local^
    spysystem/openapi-generator:th-spy-master^
    generate^
    -g php^
    -i /local/src/msbc.yaml^
    -o /local^
    -c /local/config.json

git add docs/*
git add lib/*
git add test/*
