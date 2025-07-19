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

For the detail step by step setup guide, please check this [Setup Guide](./docs/setup-guide.md)

<br />
  

This repository contains two sub modules, But you don't have to clone as individually. 
1. [Backend](https://github.com/thetpaingsoe/feature-request-system-be)
2. [Frontend](https://github.com/thetpaingsoe/feature-request-system-fe)


## Docker Setup
In this project, I already prepare the docket compose for you.  
So, that you just have to build image and run the container in your local PC.  

After build, it will create two images and one container.  
One is for backend and one is for frontend. 

Before you build the image, there are a few configuration you may need to change.  
So, Please check this doc to build the image and run the container.  
Here is the step by step guide of [Docker Guide](./docs/docker-guide.md)

## Up and Running to start local development

## How to Push to GitHub
