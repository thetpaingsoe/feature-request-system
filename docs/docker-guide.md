> [🏠 Home](./../README.md)
 
# Docker Guide
In this document, I will only explain about how to build the builder mode.  
For the development, please check this [Development Setup Guide](./docs/development-setup-guide.md)

## Prerequisites
1. Complete the [setup guide](./setup-guide.md)
2. Install Docker Desktop

    **Open Docker Desktop App**  
    Make sure you have enought space and
    **open** the docker desktop app.  
    https://www.docker.com/products/docker-desktop/

<br/>  

## For Builder Mode

### Build Image
For the builder mode,  
Please check the ENV variables in both backend and frontend

For Backend, it should be,  
**APP_ENV** must be **production**  
`path : /backend/.env`

    APP_NAME=Laravel
    APP_ENV=production
    APP_KEY=base64:/pThyXiBFsDbPkSQ35agDvr21EpzxyM/X44+7ZBA0E4=
    APP_DEBUG=true
    APP_URL=http://localhost:8000
    ASSET_URL=
    ....

For Frontend, it should be,  
**VITE_API_URL** must be **localhost** for local build  
`path : /frontend/.env`

    VITE_APP_ENV=production
    VITE_API_URL=http://localhost:8000/api
    FE_PORT=5174
    CONTAINER_PORT=80   

After that run the following command.

    docker-compose up --build

After you run above command, you will see `start worker process`.  
In that case, your images are created and container is running.

### Explore the Running Container
- Open the docker desktop app
- Click **Containers**
- There you will see the `feature-request-system` and Click That
  <img width="607" height="46" alt="image" src="https://github.com/user-attachments/assets/805f28ff-6f59-400b-b7ea-26b5cd3f1c00" />
- After that, you will see two server are running  
  <img width="438" height="211" alt="image" src="https://github.com/user-attachments/assets/0649c504-58b6-4461-811c-200d283931bd" />

So, you just have to click the 8000:80 ( Backend ) and 5173:80 ( Frontend )

Access the application at  
  http://localhost:8000 and http://localhost:5173

<br />  

> [🏠 Home](./../README.md)
 
<br />  
<br />  
<br />  
<br />  




