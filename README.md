# Laravel AWS Cognito Authentication

> Secure user authentication and session management in Laravel integrated with AWS Cognito User Pools.

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://www.php.net/)
[![Laravel Framework](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

---

## 📌 Overview
This project integrates **AWS Cognito** user pools with a Laravel application backend. It delegates user authentication, sign-ups, and tokens to Amazon Web Services while keeping local session handling smooth and secure via Laravel controllers.

## ⚡ Features
- **AWS Cognito User Pool Integration**: Cloud identity management and credential verification.
- **Session Bridge**: Syncs authenticated Cognito tokens with Laravel session state.
- **Frontend Scaffolding**: Built with Vite and modern responsive layouts.

## 🚀 Getting Started

### 1. Prerequisites
- PHP >= 8.2 & Composer
- Node.js & npm
- AWS Cognito User Pool configured

### 2. Installation

Clone the repository and install dependencies:

```bash
git clone [https://github.com/mustakkhan-dev/laravel-aws-cognito.git](https://github.com/mustakkhan-dev/laravel-aws-cognito.git)
cd laravel-aws-cognito
composer install
npm install && npm run build