# Tiny TODO - PHP Assignment
Minimal TOOD list written using PHP and Javscript with MYSQL database.

<img src="https://i.imgur.com/xixqqbh.png">

## OS Details
Developed and tested on **Xubuntu 19.10 eoan**. Obtain a copy from [here](https://xubuntu.org/download).

Code is best viewed on [vscode](https://code.visualstudio.com/) with [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) extension.

## Setup Guide
### 1) Install apache on your distro.

   For ubuntu based systems, you can issue the following commands:

```bash
   sudo apt-get update
   sudo apt-get install apache2
```

### 2) Install PHP

```bash
   sudo apt-get update
   sudo apt-get install php
```

### 3) Install PHP Mysqli
  
  This is should ideally come with your PHP installation. But you can install it using:
    
    sudo apt-get install php7.0-mysql

### 4) Install MYSQl server

```bash
    sudo apt-get install mysql-server
```
 **Note**: At this stage you should also configure your MYSQL setup as instructed [here](https://www.configserverfirewall.com/ubuntu-linux/reset-mysql-root-password-ubuntu/). Password to be used can be found in **DatabaseHandle.php** file in php folder.You can replace that password with the password you used when you configured your MYSQL server.

 ### 5) Copy this repository to var/www/html folder.
You must also give all the files adequate permission for the website to be accessible. Use **chmod**.
   

