# php-mysql-vault-example
 
This example is used to showcase K8S Hashicorp Vault Secrets injections.

## Running in Kubernetes
Run ` kubectl apply -f k8s.yaml `


## Running in Docker
Run MySQL
` docker run --net my-network -d --name=mysql -e MYSQL_ROOT_PASSWORD="12345" -p 3306:3306 -d mysql:8 `

Build PHP Docker Image
` docker build -t php-mysql:vault . `

Run PHP Docker Image 
` docker run --net my-network -e=DB_USERNAME=root -e=DB_PASSWORD=12345 -p 8888:80 php-mysql:vault `

Within `index.php` the serverName is hardcoded to `mysql:3306` 

![image](https://user-images.githubusercontent.com/28925814/130364106-eb26f90c-07c6-4956-8814-3e49121df263.png)
![image](https://user-images.githubusercontent.com/28925814/130364116-a60d735b-320b-41d1-8268-16f4f9099ead.png)

