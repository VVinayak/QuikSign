# QuikSign

- Custom E-Signature site for secure, efficient and timely document attestation in "redtape" institutions

- Developed by Aditya Balaji and Vineet Vinayak Pasupulety

## Required Dependencies

- [PHP](http://php.net/manual/en/install.php)

The PHP installation also takes care of the MySQL database setup by using the WAMP server.

- [Laravel](https://laravel.com/docs/5.5/installation)

## Running

- After cloning the repo from Github, go to the folder containing this repository. In terminal, type
```
php artisan serve
```

- When done, open a browser window and type in the following URL
```
http://localhost:8080
```

- The site should have rendered successfully! The site is still rudimentary and needs expansion to scale for large usage. We also want to add steganography components to protect signatures stored on the site
