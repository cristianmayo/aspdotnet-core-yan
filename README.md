# WordPress Development Environment
Prerequisites:

    - Code Editor: Visual Studio (Preferrable VS Code)
    - Local Workstation with Docker Desktop installed

<div style="margin-bottom: 50px;"></div>



## **Start WordPress Environment with Docker**
To configure the environment, follow instruction in [Traversy Media: Quick Wordpress Setup With Docker](https://youtu.be/pYhLEV-sRpY) for starter to configure docker-compose file, or feel-free to configure as per desired for experienced developer.

- In terminal, ensure that your active directory is set to root folder: `*\wordpress-dev-env`
- Intialize development environment: `docker-compose up --detach`
- Clean-up development environment: `docker-compose down --volumes`

<div style="margin-bottom: 50px;"></div>



## **Upload Sample WordPress Data**
Upon completion of WordPress environment via Docker images, follow either of the two (2) options below on how to upload sample data used on developing WordPress theme.

### **Option A - Import WordPress Database via phpMyAdmin portal**
1. Navigate to phpMyAdmin portal: `http://localhost:8080`
2. ...

### **Option B - Import WordPress Content via WordPress portal**
1. Navigate to WordPress portal: `http://localhost:8000`
2. ...

<div style="margin-bottom: 50px;"></div>



## **Start WordPress Theme Development**
Template Source-code Location:

    wordpress-dev-env\environment\wp-content\themes\template

1. Navigate to the Source-code Location

<div style="margin-bottom: 50px;"></div>



## **Start WordPress Plugin Development**
Template Source-code Location:

    wordpress-dev-env\environment\wp-content\plugins\template

1. Navigate to the Source-code Location