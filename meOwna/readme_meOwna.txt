meOwna foi desenvolvido por Formming Hackers, com foco na comunidade de Cibersegurança, para contribuir com estudantes e profissionais da área que desejam aprimorar suas habilidades em web hacking, ou até mesmo utilizar este ambiente para fins didáticos.

Neste laboratório de estudos, você encontrará livros, referências de aprendizagem, termos técnicos, tutoriais e diversas vulnerabilidades para explorar, como:

XSS – Cross-Site Scripting
CSRF – Cross-Site Request Forgery
SSRF – Server-Side Request Forgery
IDOR – Insecure Direct Object Reference
LFI – Local File Inclusion
RFI – Remote File Inclusion
LFD – Local File Download
BLH – Broken Link Hijacking
No Rate Limit
OS Command Injection
Open Redirect
Unrestricted File Upload
Tabnabbing
Clickjacking
HTML Injection
Information Disclosure
Outros...

## Passos para Instalação:

apt install apache2
apt install php
nano php.ini (configure allow_url_fopen = On  e allow_url_include = On)
cd /var/www/html
mv /home/user/Downloads/meowna.zip .
unzip meowna.zip
cd meOwna
service apache2 start
acesse http://localhost  

Alternativa:


apt install php
nano php.ini (configure allow_url_fopen = On  e allow_url_include = On)
wget https://github.com/ismael0liveira/meowna/blob/main/meowna.zip
cd meOwna/
php -S localhost:80
acesse http://localhost


## Sobre o autor

Ismael Oliveira

https://www.linkedin.com/in/ismaeloliveirapro/  
https://www.instagram.com/1smaeloliveira/  
https://www.facebook.com/Isma520liveira/  

Formming Hackers  
  
https://formminghackers.com  
https://www.instagram.com/formminghackers/  
https://www.facebook.com/formminghackers  
https://www.youtube.com/@FORMMINGHACKERS  
