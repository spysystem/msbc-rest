#!/usr/bin/env bash

set -e

rm -rf docs lib test

docker pull spysystem/openapi-generator:spy_branch
docker run \
	--user $(id -u):$(id -g) \
	--rm \
	-v ${PWD}:/local \
	spysystem/openapi-generator:spy_branch \
	generate \
	-i /local/src/msbc.yaml \
	-g php \
	-o /local \
	-c /local/config.yaml

git add docs/*
git add lib/*
git add test/*
