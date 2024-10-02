# MS SQL Server handson
For the article : [Working Database 1- Introduction Microsoft SQL Server and Explanation of what we will do in this series of articles](https://cmakkaya.medium.com/working-database-1-introduction-microsoft-sql-server-and-explanation-of-what-we-will-do-in-this-105bebf66a55) 

# Working Database Article Series

![image](https://github.com/cmakkaya/mssql-server-handson/assets/110052470/6108280e-f26c-4835-b235-aae80065f7e8)


In the Working Database series, firstly, we will examine Relational Database Management Systems; Microsoft SQL Server, MySQL, PostgreSQL, and MariaDB, then Amazon RDS. We will examine MongoDB as a document database and Amazon DynamoDB as a NoSQL database. We will do all the subjects practically (Hands-on) and step by step.

First, we will start the article series with Microsoft SQL Server 2022. We will run Microsoft SQL Server and Apache Webserver + PHP together in Containers. We will run the containers first with Docker Compose, then with Amazon Container Service (ECS) by using the "task definition file", and later we will run them with the "Kubernetes yaml file" by using Helm on the Elastic Kubernetes Service (EKS)..

We will enter Microsoft SQL Server data and then query them.

We will troubleshoot in the containers (in Microsoft SQL Server and Webserver). We will examine together the 6 problems and solutions I encountered while setting up Microsoft SQL Server, one by one.

Finally, we will write a Jenkins pipeline, to make them automatically deploy and update in the CI/CD lifecycle.

For Microsoft SQL Server, we will first prepare Dockerfiles and then create two Docker containers from them. One holds a Microsoft SQL database, and the other holds a Web Server (Apache) with a pre-defined PHP script in order to test the Database. We will write the Dockerfiles, and install a proper driver to connect to the Microsoft SQL Server step by step by looking at the relevant Microsoft and Docker Hub pages.

We will write a Launcher, which starts both containers. For this, firstly, We will write a Docker Compose file for Docker containers. Then, write a task definition file for Amazon Container Service (ECS), and finally, write Kubernetes yaml files for Elastic Kubernetes Service (EKS).

![image](https://github.com/cmakkaya/mssql-server-handson/assets/110052470/deeb21ab-8861-41d9-ba26-6f42b35b3ec8)

Running with the Docker compose file in Docker containers.
The Article link for more information: [Working with Database (2): Running MS SQL Server and Webserver(Apache)+PHP Containers Together Using Docker Compose](https://cmakkaya.medium.com/working-with-database-2-running-ms-sql-server-and-webserver-apache-php-containers-together-3dea9a263105) 

![image](https://github.com/cmakkaya/mssql-server-handson/assets/110052470/f4c39eec-2148-404d-aeca-1dd01cf175ac)

Running with the task definition file on the Amazon Container Service (ECS) cluster (Fargate)
The Article link for more information: It will be released soon.

![image](https://github.com/cmakkaya/mssql-server-handson/assets/110052470/eb1f2753-c204-43bb-87c0-29a310146202)

Running with the Kubernetes yaml files by using Helm on the Elastic Kubernetes Service (EKS).
The Article link for more information: It will be released soon.
