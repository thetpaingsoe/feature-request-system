 # Feature Request System

This project is a comprehensive demo application designed to streamline the process of collecting, managing, and approving new feature requests. It provides a structured platform for users to submit ideas and for administrators to review, approve, or reject them, ensuring a clear and efficient product development pipeline.

## Prerequisites  
- Before we dive in, ensure you have the following installed on your machine:  

    - Node.js and npm
    - Composer
    - PHP 8.x

## Setup Instructions  

Firstly, you need to clone this repository

    git clone https://github.com/thetpaingsoe/feature-request-system.git

After you clone the repository, you have to do the following things

- Init submodules  
- Install composer packages  
- Install npm packages for both backend and frontend.
- Database migration and seeding  

For the detail step by step setup guide, please follow this [Setup Guide](./docs/setup-guide.md)

<br />  

> After complete this setup, you can use this account to login
> For the backend   
> email : admin@gmail.com   
> password : admin12345


> For the Frontend  
> email : user1@gmail.com   
> password : user12345

<br />
  
## Docker Setup
This project comes pre-configured with Docker for easy development. You'll be running two services:

- Backend (Laravel + Inertia)
- Frontend (Vue.js)

I have prepared for you the doc to setup easily. Please check this doc to build the image and run the container.    
Here is the step by step guide of [Docker Setup Guide](./docs/docker-guide.md)
  
<br />

## Development Setup Guide

This project supports both Docker and local development for seamless workflow. Choose your preferred approach:

- Backend (PHP/Laravel/Vite/Vue) → Docker or local
- Frontend (Vue/Vite) → Docker or local 

For the detail instruction,  
Please check the step by step guide of [Development Setup Guide](./docs/development-setup-guide.md)

<br />

## Git Commit and Push Guide

After you have done some development, you have to commit and push to github.  
So, I have create a small guide how to commit and push to submodules.  
Please check [Git Commit & Push Guide](./docs/git-push-guide.md).

<br />

## Server Deployment Guide  

For the backend :  
	[Backend Deployment Guide](./docs/backend-deployment-guide.md)   
 
For the frontend :   
	[Frontend Deployment Guide](./docs/frontend-deployment-guide.md)

<br />

## Sub Modules Links
This repository contains two sub modules, But you don't have to clone as individually. 
1. [Backend](https://github.com/thetpaingsoe/feature-request-system-be)
2. [Frontend](https://github.com/thetpaingsoe/feature-request-system-fe)

<br />

## Postman API Testing  

You need to set the correct token before testing with the postman  
Here is the guide to [Setup Postman Token](./docs/postman-guide.md)	


<br />  
<br />  
<br />  
<br />  
<br />  


