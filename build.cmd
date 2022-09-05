del /s /q docs lib test

docker pull spysystem/openapi-generator:spy_branch
docker run^
    --rm^
    -v "%cd%":/local^
    spysystem/openapi-generator:spy_branch^
    generate^
    -g php^
    -i /local/src/msbc.yaml^
    -o /local^
    -c /local/config.yaml

git add docs/*
git add lib/*
git add test/*
