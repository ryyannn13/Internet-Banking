# Internet Banking System

This project is a full-featured Internet Banking System that enables secure online banking operations such as deposits, withdrawals, money transfers, and account management. It features an admin panel, staff panel, and client panel, using a MySQL database and a PHP-based web interface.

## Features

- User authentication for clients, staff, and admins.
- Multiple account management (savings, current, etc.).
- Secure deposit, withdrawal, and transfer transactions.
- Admin dashboard to manage users, staff, transactions, and settings.
- Transaction history and account statements.
- Responsive and clean user interface.
- Docker support for easy deployment.

## Prerequisites

1. **PHP**: PHP 8.2 or later with Apache support.
2. **MySQL**: Install and configure MySQL server.
3. **Docker**: For containerized deployment with Docker Compose.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/internet-banking-system.git
   cd internet-banking-system
   ```

2. Configure the database:
   - Create a MySQL database named `internetbanking`.
   - Import the provided `internetbanking_db.sql` file using a MySQL client or command line.
   - Update database credentials in the relevant PHP config file (usually in `includes/db.php` or similar).

3. (Optional) To run locally without Docker:
   - Use software like **XAMPP** or **WAMP**.
   - Place the project folder inside the `htdocs` directory.
   - Start Apache and MySQL from the control panel.
   - Visit `http://localhost/internet-banking-system` in your browser.

## Docker Deployment

1. Ensure Docker and Docker Compose are installed on your system.

2. Make sure your project folder contains the following files:
   - `Dockerfile`
   - `docker-compose.yml`
   - `internetbanking_db.sql`

3. Build and start the containers:
   ```bash
   docker-compose up --build
   ```

4. Once the containers are running, access the MySQL container to import the database:
   ```bash
   docker exec -it internet-banking-db-1 bash
   mysql -u root -p
   ```

5. Inside the MySQL shell, run the following commands:
   ```sql
   CREATE DATABASE IF NOT EXISTS internetbanking;
   USE internetbanking;
   SOURCE /internetbanking_db.sql;
   ```

6. Open your browser and go to:
   ```
   http://localhost:8085
   ```
   You should see the Internet Banking login page.

7. To stop the containers:
   ```bash
   docker-compose down
   ```

8. To restart the containers later:
   ```bash
   docker-compose start
   ```

## File Structure

   ```
   INTERNET-BANKING/
   ├── admin/                 # Admin-related functionality
   ├── client/                # Client-facing functionality
   ├── DATABASE/              # Database files
   │   └── internetbanking_db.sql  # MySQL database schema and sample data
   ├── dist/                  # Distribution files
   ├── staff/                 # Staff-related functionality
   ├── 01 LOGIN DETAILS & PROJECT INFO....  # Login credentials and project information
   ├── docker-compose.yml     # Docker Compose configuration
   ├── Dockerfile             # Docker configuration for the application
   ├── index.php              # Entry point of the application
   └── mysql                  # MySQL configuration or utility
   ```

## Troubleshooting

* **Cannot connect to database**:
   * Ensure database credentials in configuration files match your container or local setup.
   * Verify the MySQL container is running.
* **Port already in use**:
   * Change the `8085:80` mapping in `docker-compose.yml` to another port (e.g., `8086:80`).
* **Permission issues in container**:
   * You can fix them by running:
   ```bash
   docker exec -it internet-banking-web-1 bash chown -R www-data:www-data /var/www/html
   ```

## License

This project is licensed under the MIT License. 

## Acknowledgments

* Developed by [Ryan, Shyama, Samantha, Gauri]
* Technologies: PHP, MySQL, Docker, HTML/CSS/JS
