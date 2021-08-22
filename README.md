# php-mysql-vault-example
 
This example is used to showcase K8S Hashicorp Vault Secrets injections.

Run MySQL
` docker run --net my-network -d --name=mysql -e MYSQL_ROOT_PASSWORD="12345" -p 3306:3306 -d mysql:8 `

Build PHP Docker Image
` docker build -t php-mysql:vault . `

Run PHP Docker Image 
` docker run --net my-network -e=username=root -e=password=12345 -p 8888:80 siddharth67/php-mysql:vaul `

Within `index.php` the serverName is hardcoded to `mysql:3306` 
