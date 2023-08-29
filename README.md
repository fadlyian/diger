# Diger

<p align="center">
  <img src="https://github.com/fadlyian/diger/assets/91882024/445127a1-8489-4e98-a159-f841372b32c5" alt="Diger Logos" width="50%">
</p>


Diger is an e-commerce platform that enables creators, writers, artists and developers to sell their digital products directly to fans and customers. The system is developed using Laravel, VueJS, InertiaJS and Tailwind CSS. It is deployed on AWS using Ubuntu and Nginx, along with other necessary tools.

To see our application please visit the following link [Diger](https://diger.my.id/)

## Philosophy

#### Name

<p align="center">
  <img src="https://github.com/fadlyian/diger/assets/91882024/54e62ac9-f5e9-4575-abd1-87ca6a06c3b4" alt="Philosophy Name" width="50%">
</p>

#### Color

<p align="center">
  <img src="https://github.com/fadlyian/diger/assets/91882024/71acdb36-b5a1-41ce-87d6-66998c0f0d93" alt="Philosophy Color" width="50%">
</p>

## Features

- Easy and fast food ordering process
- Seamless browsing and menu selection
- Convenient cart management
- Real-time order tracking

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

Make sure you have the following software installed on your machine:
- PHP (version 8.1.2)
- Composer (version 2.2.6)
- MySQL (version 10.4.24)
- Node.js (version 14.0.0 or above)
- NPM (Node Package Manager)

## Installation

```
# Clone this repository
$ git clone [repository-url]

# Navigate to the project folder
$ cd diger

# Install the dependencies
$ composer install

# Duplicate the .env.example file and rename it to .env
$ cp .env.example .env

# Generate an application key
$ php artisan key:generate

# Run the database migrations
$ php artisan migrate

# Run the database migrations with default data
$ php artisan migrate:fresh --seed

# Create the symbolic link
$ php artisan storage:link

# Install the Node.js dependencies
$ npm install

# Build the frontend assets for production using the following command
$ npm run build

# Develop or run a Diger project in development mode
$ npm run dev

# Start the development server
$ php artisan serve

# Open your web browser and go to
$ http://localhost:8000
```

## Technology Stack

- Laravel (PHP Framework)
- VueJS (Javascript Framework)
- InertiaJS (Javascript Framework)
- Tailwind CSS (Utility-First CSS Framework)

## Contributors

- [Fadly Sofyansyah](https://github.com/fadlyian) - Backend Developer
- [Arif Saputra](https://github.com/arifsptra) - UI/UX Designer, Frontend Developer, and DevOps Engineer
- [Khafidha Sukma D ](https://github.com/khafidhasukma) - Frontend Developer
- [Akmal Faiz A](https://github.com/cnota) - Frontend Developer 

## Feature

#### Existing

- Authentication
- CRUD Account
- CRUD Product
- CRUD Category
- Filter by Category
- Buy Product

## App Preview

#### Main App
![main-app](https://github.com/fadlyian/diger/assets/91882024/19d32aec-6a8a-4324-a60a-e4a013272132)

#### Authentication and Content
![Authentication and Content](https://github.com/fadlyian/diger/assets/91882024/17c08612-e0b0-4c96-8b82-386b79c74f43)

#### Admin Dashboard
![Dashboard-Admin](https://github.com/fadlyian/diger/assets/91882024/da458b92-f707-4987-bf38-a4b7858cb309)

#### User Dashboard
![Dashboard-User](https://github.com/fadlyian/diger/assets/91882024/46a1ef1e-41a9-4288-aad1-32031db8b688)

## Database Schema

![drawSQL-diger-export-2023-08-29](https://github.com/fadlyian/diger/assets/91882024/9f536ba2-9da0-4469-a8da-0bee5adfccc0)

## Licence

This project is licensed under the MIT license. Please see the LICENSE file for more information.
