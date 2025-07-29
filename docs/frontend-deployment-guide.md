> [🏠 Home](./../README.md)

# Frontend Deployment Guide
For the frontend deployment, the main things are changing the enviroment variables in .env files and build the vue project.

## Updating .Env File  
For the sample production env, i created the sample for use  
You can check in this path : ./frontend/.env.prod

The following environment variable you must need to update  
The importanct thing is when you place **"VITE_API_URL"**, make sure it end with **"/"**  

    ...
    VITE_APP_ENV=production
    VITE_API_URL=https://psx-station.panacea-soft.co/
    FE_PORT=5174
    CONTAINER_PORT=80
    ...
    

## Building Vue Project
If you are using like vercel, you don't have to build manually. 
It will auto build it for you. You just have to make sure the .env file are correct.

For the other servers, 
After that, you can build the vue project using the following command.

    npm run build

## Deploy to Server
After build done, you can copy the project and paste to the server that you want to deploy.

> [🏠 Home](./../README.md)
