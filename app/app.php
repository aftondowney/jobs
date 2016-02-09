<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job-opening.php";

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
                 <label for='contact'>Enter the contact:</label>
                 <input id='contact' name='contact' class='form-control' type='text'>
               </div>
               <button type='submit' class='btn-success'>Create</button>
           </form>
          </body>
        </html>"
        ;
    });

    $app->get("/view_job", function() {
    $new_post = new JobOpening($_GET["title"], $_GET["description"], $_GET["contact"]);
    $new_title = $new_post->getTitle();
    $new_description = $new_post->getDescription();
    $new_contact = $new_post->getContact();
    return "<p>$new_title" . ", " . "$new_description" . ", " . "$new_contact</p>";


    });
    return $app;
?>
