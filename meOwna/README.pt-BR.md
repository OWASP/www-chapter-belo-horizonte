[Read this in English / Leia isto em Inglês](README.md)

# meOwna - Laboratório de Aprendizado de Web Hacking

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owasp-bh-full-black.png" alt="OWASP Belo Horizonte Logo" width="400"/>
</p>

<p align="center">
  <strong>Um projeto do capítulo <a href="https://owasp.org/www-chapter-belo-horizonte/">OWASP Belo Horizonte</a>, desenvolvido pela <a href="https://formminghackers.com/">Formming Hackers</a>.</strong>
</p>

---

## 🎯 Sobre o Projeto

**meOwna** é um ambiente de aprendizado intencionalmente vulnerável, criado para a comunidade de Cibersegurança. Ele serve como um laboratório prático para estudantes e profissionais que desejam aprimorar suas habilidades em web hacking ou utilizar um ambiente controlado para fins educacionais e demonstrações.

Neste laboratório, você encontrará livros, referências de aprendizado, termos técnicos, tutoriais e, claro, diversas vulnerabilidades para explorar e aprimorar seu conhecimento.

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owna1.png" alt="Interface de Aprendizado do meOwna" width="700"/>
  <br>
  <em>Interface intuitiva do meOwna, projetada para o aprendizado prático de segurança</em>
</p>

## 🆕 Novidades da Versão 2

A versão 2 traz um código mais organizado e limpo, diversas correções de bugs, um instalador nativo automatizado, melhor adaptação para ambientes Linux e novas melhorias funcionais, como a listagem de itens na página principal e uma seção de livros na página do usuário.

**Novas vulnerabilidades adicionadas na v2:**

* XXE (XML External Entity)
* SQL Injection
* Timing Attack
* Falha em 2FA (OTP)
* Simulação de descoberta de rotas em SPA (Single Page Application)
* Bypass em upload de arquivos
* Broken Link Hijacking atualizado

Também está disponível um curso completo e gratuito ensinando o uso do laboratório, no [YouTube](https://www.youtube.com/playlist?list=PLAACtr-bKsUs).

## 🔓 Vulnerabilidades Disponíveis

O ambiente foi projetado para explorar uma ampla gama de falhas de segurança comuns em aplicações web. Algumas das vulnerabilidades que você encontrará incluem:

* Cross-Site Scripting (XSS)
* Cross-Site Request Forgery (CSRF)
* Server-Side Request Forgery (SSRF)
* Insecure Direct Object Reference (IDOR)
* Local File Inclusion (LFI)
* Remote File Inclusion (RFI)
* Local File Download (LFD)
* Broken Link Hijacking (BLH)
* No Rate Limit
* OS Command Injection
* Open Redirect
* Unrestricted File Upload
* Tabnabbing
* Clickjacking
* HTML Injection
* Information Disclosure
* XXE, SQL Injection, Timing Attack, falha em 2FA (OTP) *(novidades da v2)*
* E muitas outras!

## 🚀 Começando

Para começar a explorar o **meOwna**, siga o método de instalação abaixo.

> ⚠️ **AVISO IMPORTANTE:** Esta aplicação é **intencionalmente vulnerável**. Nunca a exponha à internet ou a execute em um ambiente de produção. Utilize-a apenas em um ambiente controlado e isolado, como uma máquina virtual (VM) configurada no modo "Host-Only" ou "NAT".

### ✅ Instalação — Versão 2 (Recomendado)

O processo de instalação foi simplificado na versão 2. O próprio sistema identifica a necessidade de instalação e redireciona automaticamente para o instalador — basta seguir os passos exibidos na tela.

**Sistema Operacional recomendável:** Kali Linux (também funciona no Parrot OS e no BlackArch)

```bash
sudo su
wget https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/meOwna/meowna_v2.zip
unzip meowna_v2.zip
cd meowna2
php -S localhost:80
```

Depois acesse: **`http://localhost/instalador.php`**

*(Em algumas configurações, a aplicação identificará automaticamente a falta de instalação ao abrir `http://localhost` e redirecionará você para o instalador sozinha.)*

O instalador configurará tudo automaticamente — basta seguir os passos exibidos na tela.

---

### 🕰️ Instalação — Versão Anterior (Legado)

Os métodos abaixo referem-se à **versão antiga** do meOwna. Eles foram mantidos aqui por compatibilidade, mas novos usuários são incentivados a utilizar a instalação da **Versão 2** acima.

#### Método 1: Usando Apache2

Este método simula um ambiente de servidor web mais realista.

1.  **Instale o Apache2 e o PHP:**
    ```bash
    sudo apt update && sudo apt install apache2 php libapache2-mod-php
    ```

2.  **Habilite as configurações necessárias do PHP:**
    Edite o arquivo `php.ini` (geralmente localizado em `/etc/php/[VERSÃO]/apache2/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/apache2/php.ini
    ```
    Dentro do arquivo, encontre e altere as seguintes linhas para `On`:
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

4.  **Reinicie o serviço Apache:**
    ```bash
    sudo systemctl restart apache2
    ```

5.  **Acesse o laboratório:**
    Abra seu navegador e vá para: **`http://localhost/meOwna`**

---

#### Método 2: Usando o Servidor Embutido do PHP

Este é um método rápido para colocar o ambiente em funcionamento sem configurar um servidor web completo.

1.  **Instale o PHP:**
    ```bash
    sudo apt update && sudo apt install php wget unzip
    ```

2.  **Habilite as configurações necessárias do PHP:**
    Edite o arquivo `php.ini` (geralmente em `/etc/php/[VERSÃO]/cli/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/cli/php.ini
    ```
    Dentro do arquivo, altere as seguintes linhas para `On`:
    ```ini
    allow_url_fopen = On
    allow_url_include = On
    ```

3.  **Baixe, extraia e inicie o servidor:**
    ```bash
    # Baixar o arquivo
    wget https://github.com/OWASP/www-chapter-belo-horizonte/raw/master/meOwna/meowna.zip

    # Extrair o arquivo
    unzip meowna.zip

    # Navegar até a pasta do projeto
    cd meOwna/

    # Iniciar o servidor PHP
    php -S 0.0.0.0:8000
    ```
    *Usar `0.0.0.0` permite acessar o laboratório a partir de outro computador na mesma rede.*

4.  **Acesse o laboratório:**
    Abra seu navegador e vá para: **`http://localhost:8000`**

## 👤 Sobre o Autor e a Comunidade

**meOwna** é uma criação de Ismael Oliveira e da comunidade Formming Hackers, atualmente mantido e apoiado pelo capítulo OWASP Belo Horizonte.

#### **Autor: Ismael Oliveira**
* **LinkedIn:** [linkedin.com/in/ismaeloliveirapro](https://www.linkedin.com/in/ismaeloliveirapro/)
* **Instagram:** [@1smaeloliveira](https://www.instagram.com/1smaeloliveira/)
* **Facebook:** [Isma520liveira](https://www.facebook.com/Isma520liveira/)

#### **Comunidade: Formming Hackers**
* **Website:** [formminghackers.com](https://formminghackers.com)
* **Instagram:** [@formminghackers](https://www.instagram.com/formminghackers/)
* **Facebook:** [formminghackers](https://www.facebook.com/formminghackers)

## 🙏 Agradecimentos

Agradecemos ao capítulo **OWASP Belo Horizonte** por hospedar e apoiar este projeto, oferecendo uma plataforma para que mais pessoas da comunidade de segurança possam aprender e colaborar.
