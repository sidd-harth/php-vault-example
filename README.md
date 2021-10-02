# php-vault-example
 
This example is used to showcase Kubernetes Hashicorp Vault Secrets injections.

## Clone this repo
` git clone https://github.com/sidd-harth/php-vault-example.git `

## Build PHP Docker Image
` docker build -t php:vault . `

## Update Image in php-app-k8s-deploy.yaml and run
` kubectl apply -f php-app-k8s-deploy.yaml `

![image](https://user-images.githubusercontent.com/28925814/135718083-86ef037e-bac2-4f5a-8a1e-d1b58c538aad.png)


## Patching the Deployment with Vault Annotations
` kubectl patch deploy php -p "$(cat patch-annotations-template.yaml)" `


![image](https://user-images.githubusercontent.com/28925814/135718801-b34d5519-cf33-4b30-a84e-6de5e7610851.png)

