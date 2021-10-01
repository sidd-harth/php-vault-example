# php-vault-example
 
This example is used to showcase Kubernetes Hashicorp Vault Secrets injections.

## Clone this repo
` git clone https://github.com/sidd-harth/php-vault-example.git `

## Build PHP Docker Image
` docker build -t php:vault . `

## Update Image in php-app-k8s-deploy.yaml and run
` kubectl apply -f php-app-k8s-deploy.yaml `

![image](https://user-images.githubusercontent.com/28925814/135674891-7f4e7a0b-99fe-41d0-a8ab-b9dc4bf3a10f.png)
![image](...)

