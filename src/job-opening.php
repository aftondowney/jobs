<?php
// require_once __DIR__."/Contact.php";

class JobOpening
{
    private $title;
    private $description;
    private $contact;

    function __construct($title, $description, $contact)
    {
      $this->title = $title;
      $this->description = $description;
      $this->contact = $contact;
    }

    function setTitle()
    {
      $this->title = $title;
    }

    function getTitle()
    {
      return $this->title;
    }

    function setDescription()
    {
      $this->description = $description;
    }

    function getDescription()
    {
      return $this->description;
    }

    function setContact($new_contact)
    {
      $this->contact = $new_contact;
    }

    function getContact()
    {
      return $this->contact;
    }

}
?>
