# Docker Guide
In this document, there will be 2 sections included.  
First one is about building the image for the builder mode( Only for running the project and testing the project ).  
And Second one is for the development, that means we change make some code changes. 

> <h3>Important</h3>  
> Before you start this build,   <br />
> Please make sure you completed the base [setup guide](./setup-guide.md)<br />
> 

## For Builder Mode

### Open Docker Desktop App
Make sure you have enought space and **open** the docker desktop app.  
https://www.docker.com/products/docker-desktop/

### Build Image
For the builder mode, you don't need to change any thing.  
Just have to run the following command.  

    docker-compose up --build

After you run above command, you will see `start worker process`.  
In that case, your images are created and container is running.

### Check The Link In Docker Desktop App
- Open the docker desktop app
- Click **Containers**
- There you will see the `feature-request-system` and Click That
  <img width="607" height="46" alt="image" src="https://github.com/user-attachments/assets/805f28ff-6f59-400b-b7ea-26b5cd3f1c00" />
- After that, you will see two server are running  
  <img width="438" height="211" alt="image" src="https://github.com/user-attachments/assets/0649c504-58b6-4461-811c-200d283931bd" />

So, you just have to click the 8000:80 ( Backend ) and 5173:80 ( Frontend )


## For Development Mode
