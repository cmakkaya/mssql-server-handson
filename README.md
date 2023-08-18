# mssql-server-handson
For the article : "Working Database 1- Introduction Microsoft SQL Server and Explanation of what we will do in this series of articles"

# Working Database Article Series

In the Working Database series, firstly, we will examine Relational Database Management Systems; Microsoft SQL Server, MySQL, PostgreSQL, and MariaDB, then Amazon RDS. We will examine MongoDB as a document database and Amazon DynamoDB as a NoSQL database. We will do all the subjects practically (Hands-on) and step by step.

First, we will start the article series with Microsoft SQL Server 2022. We will run Microsoft SQL Server and Apache Webserver + PHP together first in a Container and then in a Kubernetes cluster. We will run the containers first with Dockercompose, then with Amazon Container Service (ECS), and later we will run them with the Kubernetes yaml files by using Helm on the Elastic Kubernetes Service (EKS).

We will enter Microsoft SQL Server data and then query them.

We will troubleshoot in the containers (in Microsoft SQL Server and Webserver). We will examine together the 6 problems and solutions I encountered while setting up Microsoft SQL Server, one by one.

Finally, we will write a Jenkins pipeline, to make them automatically deploy and update in the CI/CD lifecycle.

For Microsoft SQL Server, firstly, we will prepare Dockerfiles and then create two Docker containers from them. One holds a Microsoft SQL database, and the other holds a Web-Server (Apache) with a pre-defined PHP script in order to test the Database. We will write the Dockerfiles, and install a proper driver to connect to the Microsoft SQL Server step by step by looking at the relevant Microsoft and Docker Hub pages.

We will write a Launcher, which starts both containers. For this, firstly, We will write Docker compose file for Docker containers. Then, write a task defination file for Amazon Container Service (ECS), and finally, write Kubernetes yaml files for Elastic Kubernetes Service (EKS).


Running with the Docker compose file in Docker containers.

Running with the task defination file on the Amazon Container Service (ECS) cluster (Fargate)

Running with the Kubernetes yaml files by using Helm on the Elastic Kubernetes Service (EKS).