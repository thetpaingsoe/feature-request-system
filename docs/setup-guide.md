# Setup Guide

## Clone Project
If you haven't clone project, please clone using this command

    git clone https://github.com/thetpaingsoe/feature-request-system.git


## Init SubModules
Navigate to project folder  
  
    cd feature-request-system/

Init submodule using this command  

    git submodule update --init --recursive

## Setup Backend Project
For the backend, we need to install composers and npm packages. 
As a default, submodule are readonly, so we will checkout to the `main` branch and install the packages.

    cd backend
    git checkout main
    composer install
    npm install
    cd ..

## Setup Frontend Project
For the frontend, we just have to install only npm packages.
This one also we will checkout to main branch.

    cd frontend
    git checkout main
    npm install
    cd ..


That is! now project is setup in your local PC. Go back to [main doc](./../README.md)  





  


  
