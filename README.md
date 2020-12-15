> # Dynamic Corporate Website
---

> Download and upload on the server and extract

Navigate `uploads` folder and create these folders
~~~ 
clients
sliders
team
testimonials
works
~~~

> Now create a database.

Navigate to ``App/Classes/Config.php`` and  update these properties with your created database credntials
~~~
    protected $host = 'localhost'; // database host
    protected $username = 'root'; // database user name
    protected $password = ''; // database password
    protected $database = 'dcw'; // database name
~~~

Open This file `database.sql` and copy everything from there and go to your database admin panel run those copied sql code into your database sql options 

`or`
Import `database.sql` file

##### Navigate `admin/action.php` and go to line no `133`  
> Configure this option with your webmail credentials.
~~~
    $mail->Host = 'smtp.mailtrap.io';  // Set the SMTP server to send through
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = '**********';  // SMTP username
    $mail->Password = '**********';  // SMTP password
    $mail->Port = 2525;  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('yourmail@gmail.com', 'Your name'); // your email address and name this will show to the mail header               
~~~ 



> # Admin Panel
To access admin panel dashboard Go to `yoursite.com/admin`

Admin panel access credentials
~~~ 
Username: admin@e.com
Password: admin123
~~~


___

# `Credits`


Frontend Design
--
~~~
    Template Name: Sailor
    Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/  
~~~

Backend Design
--
~~~
    Bootstrap 4 : https://getbootstrap.com/
    Jquery : https://api.jquery.com
    SweetAlert: https://sweetalert2.github.io/
    Toaster: https://codeseven.github.io/toastr/
~~~

Developed By
--
Name: [Md Monir][website]

Title: Web Developer

Email: mmislam027@gmail.com
   
[Facebook][facebook] [Instagram][instagram] [GitHub][github] [LinkedIn][linkedin]

[website]: https://mdmonir-portfolio.web.app/
[instagram]: https://www.instagram.com/mdmonir027
[github]: https://github.com/mdmonir027
[linkedin]: https://www.linkedin.com/in/mdmonir027
[Facebook]: https://www.facebook.com/mdmoni027/