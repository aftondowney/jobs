<?php
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

    function getDescription()
    {
      return $this->description;
    }

    function setDescription()
    {
      $this->description = $description;
    }

    function setContact()
    {
      $this->contact = $contact;
    }

    function getContact()
    {
      return $this->contact;
    }
}
?>
