> [🏠 Home](./../README.md)

# Postman Setup Guide
For the postman API testing, you need to set the valid token key.  

When you try to check at postman and you are seeing this return means you need to get the new token and update the token before call that API again.  

	{
		"message": "Unauthenticated."
	}

## Get New Token  
Open the api ./User/Login  
After called the API, you will get the new token together with user object.  
<img width="711" height="317" alt="image" src="https://github.com/user-attachments/assets/7d52a39d-e9fd-4266-aebd-b1125de527e9" />

## Replace the Token
After that you open back the API previously you are trying, then  
Click **Authorization**  
Select **Bearer Token** at Auth Type  
Paste the new token and save.  

<img width="1012" height="236" alt="image" src="https://github.com/user-attachments/assets/96d9184c-6127-493d-8527-040b2837b783" />


Now you can start testing the APIs.

<br />

> [🏠 Home](./../README.md)
