<h3>Send Mail Via Gmail SMTP</h3>
1) Set up your Gmail account
Open your Gmail account and go to "Settings".
Navigate to the "Accounts and Import" or "Forwarding and POP/IMAP" tab.
Enable IMAP access and save the changes.
<br>
2) Configure environment variables
<br>
Open the .env file in the root directory of your Laravel project.
Find the MAIL_MAILER variable and set it to smtp.
Set the MAIL_HOST variable to smtp.gmail.com.
Set the MAIL_PORT variable to 465.
Set the MAIL_USERNAME and MAIL_PASSWORD variables to your Gmail email address and password, respectively.
Set the MAIL_ENCRYPTION variable to tls.
For password-   Go to your Google Account.
                Select Security.
                Under "Signing in to Google," select 2-Step Verification.
                At the bottom of the page, select App passwords.
                Enter a name that helps you remember where you’ll use the app password.
                Select Generate.
                To enter the app password, follow the instructions on your screen. The app password is the 16-character code that generates on your device.
                Select Done.<br>
3) composer require guzzlehttp/guzzle
4) php artisan make:mail SendEmail
5) make controller and routes for setup mail
