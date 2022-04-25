del /s /q docs lib test

docker pull spysystem/openapi-generator:th_support_for_server_variables_in_operations
docker run^
    --rm^
    -v "%cd%":/local^
    spysystem/openapi-generator:th_support_for_server_variables_in_operations^
    generate^
    -g php^
    -i /local/src/msbc.yaml^
    -o /local^
    -c /local/config.yaml

git add docs/*
git add lib/*
git add test/*
