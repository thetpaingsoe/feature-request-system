# Development Setup Guide
For the development mode, we will have another 2 sections.  
One is for the backend and one is for the frontend.

## Backend setup
For the backend development setup, you may need to choose one for PHP  
`local on Host` or ` Docker`

But for the Vue with Vite. You can only use `Local on Host`

### Backend : PHP ( Local On Host )
Firstly you may need to change the APP_ENV to local

`// path : ./backend/.env`

    APP_ENV=local

After that, you need to run the following command. 

    php artisan serve

### Backend : PHP ( Docker )
Firstly you may need to change the APP_ENV to local

`// path : ./backend/.env`

    APP_ENV=local

After that you build using the following command.  

    docker-compose --env-file ./backend/.env up --build backend

### Backend : Vue with Vite ( Local On Host )
For the vite, you need to open new terminal and run the following command  

    cd backend
    npm run dev

We are using on host approach for vite, without using the docker.  
It is more faster and reduce the load of docker.  

Now you can start your backend development with Vue Hot Reload ⚡️.
 
<br />

## Frontend setup
For the frontend, you can use both on host ( local ) and using docker image.

### Frontend : Vite ( Local On Host )
It is normal work flow and you just have to run the following command.

    cd frontend
    npm run dev

And you can start edit the frontend project.

### Frontend : Vite ( Docker )
If you want to use docker and still want the Vue Hot Reload ⚡️,  
you many need to do the following things. 

`// Copy the .env`  
`// from ./frontend/.env.dev to ./frontend/.env`  

    VITE_APP_ENV=local
    VITE_API_URL=http://localhost:8000/api
    FE_PORT=5173
    CONTAINER_PORT=5173
    
After that you need to run the following

      docker-compose --env-file ./frontend/.env up --build frontend

Now you can start your frontend development.

<br />  

> [🏠 Home](./../README.md)
 
<br />  
<br />  
<br />  
<br />  
