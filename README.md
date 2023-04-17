# SAE 301

## Table of Contents

* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)
    * [Requirements](#requirements)
    * [Installation](#installation)
* [Features](#features)
* [Status](#status)
* [License](#license)
* [Thanks](#thanks)

## General info

This project is a website for a real estate company. It is a website that allows users to search for properties and contact the company. It also allows the company to add, edit, and delete properties. The company is specialised in selling castles.

The website is made with pure HTML, CSS, JavaScript, and PHP. It uses a MariaDB database to store the properties.

## Technologies


<a href="https://www.w3.org/TR/html5/" title="HTML5"><img src="https://github.com/get-icon/geticon/raw/master/icons/html-5.svg" alt="HTML5" width="64px" height="64px"></a>
<a href="https://www.w3.org/TR/CSS/" title="CSS3"><img src="https://github.com/get-icon/geticon/raw/master/icons/css-3.svg" alt="CSS3" width="64px" height="64px"></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" title="Javascript"><img src="https://github.com/get-icon/geticon/raw/master/icons/javascript.svg" alt="Javascript" width="64px" height="64px"></a>
<a href="https://php.net/" title="PHP"><img src="https://github.com/get-icon/geticon/raw/master/icons/php.svg" alt="PHP" width="64px" height="64px"></a>
<a href="https://mariadb.org/" title="MariaDB"><img src="https://github.com/get-icon/geticon/raw/master/icons/mariadb.svg" alt="MariaDB" width="64px" height="64px"></a>

## Setup

### Requirements

* A web server (Apache, Nginx, etc.)
* PHP 7.4 or higher
* MariaDB

The website was tested on Almalinux 9.1 with Apache 2.4.53, PHP 8.0.27 and MariaDB 10.5.16.

### Installation

1. Clone the repository
2. Create a database and import the `database.sql` file
3. Edit the `config.php` file to match your database configuration
4. Copy the files to your web server
5. Enjoy!

The default admin username is `admin@admin.fr` and the default password is `Admin#1234`. Please change it after the
installation, for security reasons.

## Features

List of features

### User Features

* Responsive design
* Contact form
* Property listings
* Property details
* Different filters for the property listings
* Property Map
* Property photos
* Virtual tour

### Admin Features

* Login system with rights management
* Property management (add, edit, delete)
* User management (add, edit, change rights, delete)
* Contact messages view
* Menu to rapidly access the different pages

To acces the admin panel, connect with the admin account and click on the "Admin" link in the header.

## Status

Project is: _finished_

## License

This project is licensed under the GNU General Public License v2.0 - see the LICENSE file for details

## Thanks

Thanks to GitHub for creating the awesome copilot feature. It helped us a lot to create this project.

<a href="https://github.com/" title="Github"><img src="https://github.com/get-icon/geticon/raw/master/icons/github-icon.svg" alt="Github" width="64px" height="64px"></a>

I wanted also to thank Jetbrains for creating the awesome PHPStorm IDE. I used it to create this project.

<a href="https://www.jetbrains.com/phpstorm/" title="PhpStorm"><img src="https://github.com/get-icon/geticon/raw/master/icons/phpstorm.svg" alt="PhpStorm" width="64px" height="64px"></a>

Finally, I wanted to thank my friends for helping me with the project with their feedback and ideas.