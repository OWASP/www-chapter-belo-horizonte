[Read this in English / Leia isto em Inglês](README.md)

# meOwna - Laboratório de Estudos em Web Hacking

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owasp-bh-full-black.png" alt="Logo OWASP Belo Horizonte" width="400"/>
</p>

<p align="center">
  <strong>Um projeto do capítulo <a href="https://owasp.org/www-chapter-belo-horizonte/">OWASP Belo Horizonte</a>, desenvolvido por <a href="https://formminghackers.com/">Formming Hackers</a>.</strong>
</p>

---

## 🎯 Sobre o Projeto

O **meOwna** é um ambiente de aprendizado intencionalmente vulnerável, criado com foco na comunidade de Cibersegurança. Ele serve como um laboratório prático para estudantes e profissionais da área que desejam aprimorar suas habilidades em *web hacking* ou utilizar um ambiente controlado para fins didáticos e demonstrações.

Neste laboratório, você encontrará livros, referências de aprendizagem, termos técnicos, tutoriais e, claro, diversas vulnerabilidades para explorar e aprimorar seus conhecimentos.

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owna1.png" alt="Interface de aprendizado do meOwna" width="700"/>
  <br>
  <em>Interface intuitiva do meOwna projetada para aprendizado prático de segurança</em>
</p>

## 🔓 Vulnerabilidades Disponíveis

O ambiente foi projetado para explorar uma vasta gama de falhas de segurança comuns em aplicações web. Algumas das vulnerabilidades que você encontrará são:

* Cross-Site Scripting (XSS)
* Cross-Site Request Forgery (CSRF)
* Server-Side Request Forgery (SSRF)
* Insecure Direct Object Reference (IDOR)
* Local File Inclusion (LFI)
* Remote File Inclusion (RFI)
* Local File Download (LFD)
* Broken Link Hijacking (BLH)
* Ausência de Limite de Requisições (No Rate Limit)
* Injeção de Comandos do SO (OS Command Injection)
* Redirecionamento Aberto (Open Redirect)
* Upload de Arquivos Irrestrito (Unrestricted File Upload)
* Tabnabbing
* Clickjacking
* HTML Injection
* Divulgação de Informações (Information Disclosure)
* E muitas outras!

## 🚀 Começando

Para começar a explorar o **meOwna**, siga um dos métodos de instalação abaixo.

> ⚠️ **AVISO IMPORTANTE:** Esta aplicação é **intencionalmente vulnerável**. Nunca a exponha à internet ou a execute em um ambiente de produção. Utilize-a apenas em um ambiente controlado e isolado, como uma máquina virtual (VM) configurada em modo "Host-Only" ou "NAT".

### Método 1: Usando Apache2 (Recomendado)

Este método simula um ambiente de servidor web mais realista.

1.  **Instale o Apache2 e o PHP:**
    ```bash
    sudo apt update && sudo apt install apache2 php libapache2-mod-php
    ```

2.  **Habilite configurações necessárias no PHP:**
    Edite o arquivo `php.ini` (geralmente localizado em `/etc/php/[VERSAO]/apache2/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/apache2/php.ini
    ```
    Dentro do arquivo, localize e altere as seguintes linhas para `On`:
    ```ini
    allow_url_fopen = On
    allow_url_include = On
    ```
    *Dica: Use `Ctrl + W` no nano para pesquisar.*

3.  **Baixe e extraia o projeto:**
    Navegue até o diretório raiz do seu servidor web e baixe o projeto.
    ```bash
    cd /var/www/html/
    sudo wget https://github.com/OWASP/www-chapter-belo-horizonte/raw/master/meOwna/meowna.zip
    sudo unzip meowna.zip
    ```
    *Isso criará uma pasta `meOwna` dentro de `/var/www/html/`.*

4.  **Reinicie o serviço do Apache:**
    ```bash
    sudo systemctl restart apache2
    ```

5.  **Acesse o laboratório:**
    Abra seu navegador e acesse: **`http://localhost/meOwna`**

---

### Método 2: Usando o Servidor Embutido do PHP

Este é um método rápido para subir o ambiente sem a necessidade de configurar um servidor web completo.

1.  **Instale o PHP:**
    ```bash
    sudo apt update && sudo apt install php wget unzip
    ```

2.  **Habilite configurações necessárias no PHP:**
    Edite o arquivo `php.ini` (geralmente localizado em `/etc/php/[VERSAO]/cli/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/cli/php.ini
    ```
    Dentro do arquivo, altere as seguintes linhas para `On`:
    ```ini
    allow_url_fopen = On
    allow_url_include = On
    ```

3.  **Baixe, extraia o projeto e inicie o servidor:**
    ```bash
    # Baixe o arquivo
    wget https://github.com/OWASP/www-chapter-belo-horizonte/raw/master/meOwna/meowna.zip

    # Extraia o arquivo
    unzip meowna.zip

    # Navegue até a pasta do projeto
    cd meOwna/

    # Inicie o servidor PHP
    php -S 0.0.0.0:8000
    ```
    *Usar `0.0.0.0` permite acessar o laboratório a partir de outro computador na mesma rede.*

4.  **Acesse o laboratório:**
    Abra seu navegador e acesse: **`http://localhost:8000`**

## 👤 Sobre o Autor e a Comunidade

O **meOwna** é uma criação de Ismael Oliveira e da comunidade Formming Hackers, agora mantido e apoiado pelo capítulo OWASP de Belo Horizonte.

#### **Autor: Ismael Oliveira**
* **LinkedIn:** [linkedin.com/in/ismaeloliveirapro](https://www.linkedin.com/in/ismaeloliveirapro/)
* **Instagram:** [@1smaeloliveira](https://www.instagram.com/1smaeloliveira/)
* **Facebook:** [Isma520liveira](https://www.facebook.com/Isma520liveira/)

#### **Comunidade: Formming Hackers**
* **Website:** [formminghackers.com](https://formminghackers.com)
* **Instagram:** [@formminghackers](https://www.instagram.com/formminghackers/)
* **Facebook:** [formminghackers](https://www.facebook.com/formminghackers)

## 🙏 Agradecimentos

Agradecemos ao capítulo **OWASP de Belo Horizonte** por acolher e apoiar este projeto, fornecendo uma plataforma para que mais pessoas na comunidade de segurança possam aprender e colaborar.
