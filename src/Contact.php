<?php
  class Contact
  {
    private $name;
    private $email;

      function _construct($name, $email)
      {
         $this->name = $name;
         $this->email = $email;
      }

      function setName()
      {
        $this->name = $name;
      }

      function getName()
      {
        return $this->name;
      }

      function setEmail()
      {
        $this->email = $email;
      }

      function getEmail()
      {
        return $this->email;
      }
  }
?>
