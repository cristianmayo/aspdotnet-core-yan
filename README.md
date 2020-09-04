# WordPress Development Environment

## Local Setup for Development
### Install Prerequisites:
    Node v13.0.1
    NPM v6.12.0
    Docker v19.03.12
### Clone this repository
### Working with docker containers
- Pull docker images:
    - mysql 5.7 >> `docker pull mysql:5.7`
    - phpmyadmin >> `docker pull phpmyadmin/phpmyadmin`
    - wordpress >> `docker pull wordpress`
- Detach containers >> `docker-compose up --detach`
- Want to remove the containers? >> `docker-compose down --volumes`

<hr />

### External References:
- [Traversy Media: Quick Wordpress Setup With Docker](https://youtu.be/pYhLEV-sRpY)