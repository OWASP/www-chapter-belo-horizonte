[Leia isto em Português / Read this in Portuguese](README.pt-BR.md)

# meOwna - Web Hacking Learning Lab

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owasp-bh-full-black.png" alt="OWASP Belo Horizonte Logo" width="400"/>
</p>

<p align="center">
  <strong>A project from the <a href="https://owasp.org/www-chapter-belo-horizonte/">OWASP Belo Horizonte</a> chapter, developed by <a href="https://formminghackers.com/">Formming Hackers</a>.</strong>
</p>

---

## 🎯 About the Project

**meOwna** is an intentionally vulnerable learning environment created for the Cybersecurity community. It serves as a practical lab for students and professionals who want to hone their web hacking skills or use a controlled environment for educational purposes and demonstrations.

In this lab, you will find books, learning references, technical terms, tutorials, and, of course, several vulnerabilities to explore and improve your knowledge.

<p align="center">
  <img src="https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/assets/images/owna1.png" alt="meOwna Learning Interface" width="700"/>
  <br>
  <em>meOwna's intuitive interface designed for hands-on security learning</em>
</p>

## 🆕 What's New in Version 2

Version 2 brings a cleaner codebase, several bug fixes, a native automated installer, better adaptation for Linux environments, and new functional improvements such as an item listing on the main page and a books section on the user page.

**New vulnerabilities added in v2:**

* XXE (XML External Entity)
* SQL Injection
* Timing Attack
* 2FA (OTP) flaw
* Route discovery simulation in SPA (Single Page Application)
* File upload bypass
* Updated Broken Link Hijacking

A free, complete course teaching how to use the lab is also available on [YouTube](https://www.youtube.com/playlist?list=PLAACtr-bKsUs).

## 🔓 Available Vulnerabilities

The environment is designed to explore a wide range of common web application security flaws. Some of the vulnerabilities you will find include:

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
* XXE, SQL Injection, Timing Attack, 2FA (OTP) flaw *(new in v2)*
* And many more!

## 🚀 Getting Started

To start exploring **meOwna**, follow the installation method below.

> ⚠️ **IMPORTANT WARNING:** This application is **intentionally vulnerable**. Never expose it to the internet or run it in a production environment. Use it only in a controlled and isolated environment, such as a virtual machine (VM) configured in "Host-Only" or "NAT" mode.

### ✅ Installation — Version 2 (Recommended)

The installation process was simplified in version 2. The system automatically detects that it needs to be set up and redirects you to the installer — you just need to follow the on-screen steps.

**Recommended Operating System:** Kali Linux (also works on Parrot OS and BlackArch)

```bash
sudo su
wget https://raw.githubusercontent.com/OWASP/www-chapter-belo-horizonte/master/meOwna/meowna_v2.zip
unzip meowna_v2.zip
cd meowna2
php -S localhost:80
```

Then access: **`http://localhost/instalador.php`**

*(On some setups the app will detect the missing installation automatically when you open `http://localhost`, and redirect you to the installer on its own.)*

The installer will configure everything automatically — just follow the steps shown on screen.

---

### 🕰️ Installation — Previous Version (Legacy)

The methods below refer to the **older version** of meOwna. They are kept here for compatibility, but new users are encouraged to use the **Version 2** installation above.

#### Method 1: Using Apache2

This method simulates a more realistic web server environment.

1.  **Install Apache2 and PHP:**
    ```bash
    sudo apt update && sudo apt install apache2 php libapache2-mod-php
    ```

2.  **Enable required PHP settings:**
    Edit the `php.ini` file (usually located at `/etc/php/[VERSION]/apache2/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/apache2/php.ini
    ```
    Inside the file, find and change the following lines to `On`:
    ```ini
    allow_url_fopen = On
    allow_url_include = On
    ```
    *Tip: Use `Ctrl + W` in nano to search.*

3.  **Download and extract the project:**
    Navigate to your web server's root directory and download the project.
    ```bash
    cd /var/www/html/
    sudo wget https://github.com/OWASP/www-chapter-belo-horizonte/raw/master/meOwna/meowna.zip
    sudo unzip meowna.zip
    ```
    *This will create a `meOwna` folder inside `/var/www/html/`.*

4.  **Restart the Apache service:**
    ```bash
    sudo systemctl restart apache2
    ```

5.  **Access the lab:**
    Open your browser and go to: **`http://localhost/meOwna`**

---

#### Method 2: Using PHP's Built-in Server

This is a quick method to get the environment running without setting up a full web server.

1.  **Install PHP:**
    ```bash
    sudo apt update && sudo apt install php wget unzip
    ```

2.  **Enable required PHP settings:**
    Edit the `php.ini` file (usually at `/etc/php/[VERSION]/cli/php.ini`):
    ```bash
    sudo nano /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/cli/php.ini
    ```
    Inside the file, change the following lines to `On`:
    ```ini
    allow_url_fopen = On
    allow_url_include = On
    ```

3.  **Download, extract, and start the server:**
    ```bash
    # Download the file
    wget https://github.com/OWASP/www-chapter-belo-horizonte/raw/master/meOwna/meowna.zip

    # Extract the file
    unzip meowna.zip

    # Navigate to the project folder
    cd meOwna/

    # Start the PHP server
    php -S 0.0.0.0:8000
    ```
    *Using `0.0.0.0` allows you to access the lab from another computer on the same network.*

4.  **Access the lab:**
    Open your browser and go to: **`http://localhost:8000`**

## 👤 About the Author and Community

**meOwna** is a creation of Ismael Oliveira and the Formming Hackers community, now maintained and supported by the OWASP Belo Horizonte chapter.

#### **Author: Ismael Oliveira**
* **LinkedIn:** [linkedin.com/in/ismaeloliveirapro](https://www.linkedin.com/in/ismaeloliveirapro/)
* **Instagram:** [@1smaeloliveira](https://www.instagram.com/1smaeloliveira/)
* **Facebook:** [Isma520liveira](https://www.facebook.com/Isma520liveira/)

#### **Collaborator: Guilherme Berlanga**
* **LinkedIn:** [linkedin.com/in/guilherme-berlanga-8b8976385](https://www.linkedin.com/in/guilherme-berlanga-8b8976385/)
* **Instagram:** [@gui.berlanga](https://www.instagram.com/gui.berlanga/)


#### **Community: Formming Hackers**
* **Website:** [formminghackers.com](https://formminghackers.com)
* **Instagram:** [@formminghackers](https://www.instagram.com/formminghackers/)
* **Facebook:** [formminghackers](https://www.facebook.com/formminghackers)

## 🙏 Acknowledgements

We thank the **OWASP Belo Horizonte** chapter for hosting and supporting this project, providing a platform for more people in the security community to learn and collaborate.
