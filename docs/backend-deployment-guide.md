> [🏠 Home](./../README.md)

<br />

# Backend Deployment Guide
For the backend deployment, the main things are changing the enviroment variables in .env files and build the vue project.

<br />

## Updating .Env File  
For the sample production env, i created the sample for use  
You can check in this path : ./backend/.env.prod

The following environment variable you must need to update  
The importanct thing is when you place **"APP_URL"**, make sure it end with **"/"**  

    ...
    APP_ENV=production
    APP_DEBUG=false
    APP_URL=https://psx-station.panacea-soft.co/ 
    ASSET_URL="${APP_URL}public"
    SANCTUM_STATEFUL_DOMAINS="${APP_URL}"
    ...
    
<br />

## Building Vue Project
After that, you can build the vue project using the following command.

    npm run build

<br />

## Deploy to Server
After build done, you can copy the project and paste to the server that you want to deploy.

<br />

> [🏠 Home](./../README.md)

<br />
<br />
<br />
<br />
<br />