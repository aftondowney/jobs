<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job-Opening.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/new_posting", function() {
        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Post a new job</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>
          <body>
            <form action='/view_job'>
               <div class='form-group'>
                 <label for='title'>Enter Job Title:</label>
                 <input id='title' name='title' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                 <label for='description'>Enter the description:</label>
                 <input id='description' name='description' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                 <label for='name'>Enter your Name:</label>
                 <input id='name' name='name' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                 <label for='email'>Enter your Email:</label>
                 <input id='email' name='email' class='form-control' type='text'>
               </div>
               <button type='submit' class='btn-success'>Create</button>
           </form>
          </body>
        </html>"
        ;
    });

    $app->get("/view_job", function() {

    $new_contact = new Contact($_GET["name"], $_GET["email"]);
    $new_post = new JobOpening($_GET["title"], $_GET["description"], $new_contact);

    $new_title = $new_post->getTitle();
    $new_description = $new_post->getDescription();
    $current_contact = $new_post->getContact();

    $new_name = $current_contact->getName();
    $new_email = $current_contact->getEmail();

    // return "$new_name";
    return "<ul>
            <li>$new_title</li>
            <li>$new_description</li>
              <ul>
                <li>$new_name</li>
                <li>$new_email</li>
              </ul>
            </ul>
            ";
  });
    return $app;
?>
