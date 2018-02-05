

<?php
 namespace blog;
class Users
{
  private $name;
  private $surName;
  private $userName;
  private $email;
  private $password;
  private $age;
  
  public function __construct($name,$surName,$userName,$email,$password, $age){
    $this->name = $name;
    $this->surName = $surName;
    $this->userName = $userName;
    $this->email = $email;
    $this->password = $password;
    $this->age = $age;
  }
  public function get_age(){
    return $this->age;
  }
  public function get_name(){
    return $this->name;
  }
  public function birthday(){
    $this->age++;
  }
}
?>