#!/bin/bash
# Run project on container php7.4
docker run -it --rm --name php-cli -v ${PWD}:/usr/src/myapp \
 -w /usr/src/myapp php:7.4-cli-alpine php ${@}

