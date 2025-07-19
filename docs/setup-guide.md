# Setup Guide

## Clone Project
If you haven't clone project, please clone using this command

    git clone https://github.com/thetpaingsoe/feature-request-system.git


## Init SubModules
Navigate to project folder  
  
    cd feature-request-system/

Init submodule using this command  

    git submodule update --init --recursive

## Install Backend Packages
For the backend, we need to install composers and npm packages. 
As a default, submodule are readonly, so we will checkout to the `main` branch and install the packages.

    cd backend
    git checkout main
    composer install
    npm install
    cd ..

## Install Frontend Packages
For the frontend, we just have to install only npm packages.
This one also we will checkout to main branch.

    cd frontend
    git checkout main
    npm install
    cd ..

## Setup Database and Run Seed Migration
This will setup your default admin account and sample 50 data for the sample feature request.  
*If it ask about confirmation, just select "yes".*

    cd backend
    php artisan migrate
    php artisan db:seed
    cd ..

That is! now project is successfully setup in your local.  
> [🏠 Home](./../README.md)  





  


  
