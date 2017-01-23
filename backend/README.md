# Standard Code Test
## Backend application
This is the backend application part of the assignment.

It's built with the Symfony PHP framework (version 3.2).
Additionally I've used the following packages:
- simplepie/simplepie
- nelmio/cors-bundle
- jenssegers/date
- friendsofsymfony/rest-bundle

Symfony 3.2 requires a minimum of PHP 5.5.9, so if you don't have this locally on your computer I'll recommend booting up a virtual machine stisfying this requirement.

To run the server perform the following steps:
1. Run `composer install`
2. Then `php bin/console server:run`
3. Open your web browser and navigate to `http://localhost:8000` to verify the server is running

Sometimes if port 8000 is already in use the application will run on another port.
If this happens you'll have to change the `BACKEND_URL` constant in the frontend application.
This is explained in further detail in the README for the frontend application.

If you encounter any problems running the program, just drop me an e-mail and I'll assist you.

Enjoy!