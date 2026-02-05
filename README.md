Source files for the IMP website.

(If you are looking for the Sali Lab website, that is in [its own repository](https://github.com/salilab/lab_website/).)

The files are installed using `make`, which preprocesses inputs using `php` to make static HTML, with
the exception of `mysql_connect.php.in`, which must be manually copied to `mysql_connect.php`
and edited to include MySQL credentials.
