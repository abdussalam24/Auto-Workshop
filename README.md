# Auto Workshop Website

This project has been restructured into a decoupled architecture with separate **Frontend** and **Backend** components.

## Project Structure

- **/frontend**: Contains the user interface, assets, and views.
  - `/assets`: CSS, JS, and Images.
  - `/layout`: Header and Footer components.
- **/backend**: Contains the server-side logic and configuration.
  - `/config`: Database connection settings (`db.php`).
  - `/api`: Handlers for form submissions (e.g., `enquiry.php`).
  - `/vendor`: PHP dependencies managed by Composer.
- **/tests**: Basic automated tests to verify project integrity.
- **index.php**: Main entry point that redirects to the frontend.

## Key Changes

1. **Separation of Concerns**: PHP logic was moved from view files (like `footer.php`) into dedicated API endpoints in the `backend` folder.
2. **Asset Management**: Images and CSS were moved to a central `assets` directory for better organization.
3. **AJAX Form Handling**: The enquiry form now uses the `fetch` API to communicate with the backend asynchronously, providing a better user experience without page reloads.

## Setup & Deployment

1. **Database**: Import your MySQL database and update the credentials in `backend/config/db.php`.
2. **SMTP**: Update the PHPMailer settings in `backend/api/enquiry.php` with your email credentials.
3. **Web Server**: Point your web server to the project root or the `frontend` directory.

## Testing

Run the basic test script to verify the structure:
```bash
php tests/basic_test.php
```
