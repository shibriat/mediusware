# Laravel Banking System

This is a Laravel-based banking system project with support for two types of users: Individual and Business. The system allows users to perform deposit and withdrawal operations.

## Project Overview

- **User Types:**
  - Individual
  - Business

- **Supported Operations:**
  - Deposit
  - Withdrawal

## Features

- **User Authentication:** The project includes user authentication with secure password hashing and session management.

- **User Roles:** Users are categorized into two roles: Individual and Business, each with different access and privileges.

- **Deposit Operation:** Users can deposit funds into their accounts with a specified amount and date.

- **Withdrawal Operation:** Users can withdraw funds from their accounts with a specified amount, date, and withdrawal conditions.

- **Balance Tracking:** The system keeps track of users' account balances and updates them based on deposit and withdrawal operations.

## Getting Started

To get started with this project, follow these steps:

1. Clone this repository to your local environment.

   ```bash
   git clone https://github.com/shibriat/mediusware.git
   ```

2. Install project dependencies.

   ```bash
   cd mediusware
   composer install
   ```

3. Create a `.env` file by copying `.env.example` and configure your database settings.

4. Generate an application key.

   ```bash
   php artisan key:generate
   ```

5. Run database migrations.

   ```bash
   php artisan migrate
   ```

6. Serve the application.

   ```bash
   php artisan serve
   ```

7. Access the application in your browser at `http://localhost:8000`.

## Usage

- Register as an Individual or Business user.

- Log in to your account.

- Perform deposit and withdrawal operations based on your user type.

## Contribution

If you want to contribute to this project or report issues, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and commit them.

4. Create a pull request with a clear description of your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

- This project is built with Laravel, an open-source PHP web framework.
- It uses the AdminLTE template for the user interface.

Happy coding!

```
