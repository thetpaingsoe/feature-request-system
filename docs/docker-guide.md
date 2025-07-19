# Docker Guide
In this document, there will be 2 sections included.  
First one is about building the image for the builder mode( Only for running the project and testing the project ).  
And Second one is for the development, that means we change make some code changes. 

## Prerequisites
1. Complete the [setup guide](./setup-guide.md)
2. Install Docker Desktop

### Open Docker Desktop App
Make sure you have enought space and **open** the docker desktop app.  
https://www.docker.com/products/docker-desktop/

<br/>  

## For Builder Mode

### Build Image
For the builder mode, you don't need to change any thing.  
Just have to run the following command.  

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

Now you can test the applications in your browser. 

<br />  

## For Development Mode  
For the development mode, we will have another 2 sections.  
One is for the backend and one is for the frontend.

### Backend setup
Firstly you may need to change the APP_ENV to local

`// path : ./backend/.env`

    APP_ENV=local

After that you build using the following command.  

    docker-compose --env-file ./backend/.env up --build backend

But this command will only build for PHP.    
So, for the vite, you need to open new terminal and run the following command  

    cd backend
    npm run dev

We are using on host approach for vite, without using the docker.  
It is more faster and reduce the load of docker.  

Now you can start your backend development with Vue Hot Reload ⚡️.

<br />

### Frontend setup
For the frontend, you can use both on host ( local ) and using docker image.

#### Using On Host ( Local )
It is normal work flow and you just have to run the following command.

    cd frontend
    npm run dev

And you can start edit the frontend project.

#### Using Docker 
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
<br />  
<br />  
<br />  
<br />  




