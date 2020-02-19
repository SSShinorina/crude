<?php
class form
{
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $website;
    public $dob;
    public $address;

    public function setData($data=' '){
        if(array_key_exists('name',$data)){
            $this->fname=$data['name'];
        }
        if(array_key_exists('text',$data)){
            $this->lname=$data['text'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('contact',$data)){
            $this->phone=$data['contact'];
        }
        if(array_key_exists('taken',$data)){
            $this->website=$data['taken'];
        }
        if(array_key_exists('des', $data)){
            $this->dob=$data['des'];
        }
        if(array_key_exists('dept',$data)){
            $this->address=$data['dept'];
        }
        return $this;
    }

    public function store(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=web_form', 'root', '');
            $sql = "INSERT INTO `form` (`id`, `fname`, `lname`, `email`, `phone`, `website`, `dob`, `address`) 
VALUES (:id, :fnm, :lnm, :email, :phone, :website, :dob, :address )";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => null,
                ':fnm' => $this->fname,
                ':lnm' => $this->lname,
                ':email' => $this->email,
                ':phone' => $this->phone,
                ':website' => $this->website,
                ':dob'=> $this->dob,
                ':address' => $this->address

            ));


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function show()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=web_form', 'root', '');
            $sql = "SELECT * FROM `form`";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function login_user(){

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=web_form', 'root', '');
            $sql_Insert = "SELECT * FROM 'form' WHERE email=:email";
            $stmt = $pdo->prepare($sql_Insert);
            $stmt->execute(
                array(
                    ':mail'=>$this->email,

                )

            ); session_start();
            $_SESSION['uname']=$this->email;


            $userData = $stmt->fetch();
            if ($stmt->rowCount()>0)
            {

                header('location:index.php');

            }
            else{
                session_start();
                $_SESSION['message']="Invalide Inpute...";
                header('location:login.php');
            }
            $this->id=$userData['id'];

        }
        catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }


    }



}