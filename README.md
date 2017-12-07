# OCP5

## Project Title

This project is a personnal and professional blog. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.


## Installing

Use this command in your terminal to instal the repo in your local folder :
```
git clone https://github.com/Julien-Butty/OCP5.git
```

## Database 

You could use phpmyadmin or another database management application.
Just paste and copy code in **blogPro.sql** files which is located in the Bd directory .

Then edit parameters in the **dev.ini** files in Config directory to access your localhost database.
Complete with your login and passeword to allow connection.
```
[BD]
dsn = 'mysql:host=localhost;dbname=blogPro;charset=utf8'
login = root
mdp = root
```
