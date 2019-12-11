# Online Shopping Application Admin
> If you want to check the same project using pure PHP, click here: [Online-Shopping-Admin-PHP](https://github.com/maorutian/Online-Shopping-Admin-PHP)  
> This document only show Admin system Details.
> If you are interested in Online Cake Shopping Application (Customer side and Admin side), click here:

## Technical skills
PHP Laravel + Bootstrap + Datatable + Mysql
## Introduction
  This is a cake online shopping application admin side.
#### This application has the following functions:
 - Admin login/logout
 - Products
	- View available products and prices
	- Review, add, modify and delete individual product details
- Employees
	- View individual employee information
	- Review, add, modify and delete employee details
	
## Files/Folders Structure
Here is a brief explanation of the folder structure (only show changed file in laravel):

```
└── app                                 # Contains all template source files.
│   └── Http                            # Contains Classes and Libraries that should not be acc
│   │   └── Controllers                 # .
│   │   │   └── AdminController         # Employee Class.
│   │   └── Middleware                     # .
│   │       └── Authenticate.php                 # Employee Class.
│   │       └── RedirectIfAuthenticated.php      # Employee Class.
│   │   
│   └── Category.php          # Functions related to database.
│   └── Employee.php          # Database credentials.
│   └── Product.php           # Libray of functions.
│   
└── config                    # Contains all template source files.
│   └── auth.php              # Contains Classes and Libraries that should not be acc
│   
└── database                  # Contains all template source files.
│   └── migration             # Contains
│   └── seeds                 # .
|   
└── public                    # Contains all template source files.
│   └── css                   # Contains
│   └── js                    # .
|   
└── resources                 # Contains all template source files.# Contains
│   └── views                 # .
│      └── admin              # Contains all JavaScript files# Custom own chart using Chart.js.
│      └── layout             # Contains all employees pages.
|
└── routes                    # Contains all template source files.# Contains
│   └── web.php               # .
│
└──.env                       # Resources for readme.md.
|
└── readme_media              # Resources for readme.md.
```

##Build
composer

## Pros of Laravel
1. Access Databases Efficiently     
2. Good Coding Standard and Security 
3. Stronger Teamwork

## Cons of Laravel
1. Limited Visibility and Control 
2. Hard to to debug                                     

## Screen Views
![admin_home.png](readme_media/home.png)
![admin_home.png](readme_media/allproducts.png)
![admin_home.png](readme_media/resetpassword.png)






