<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <form action = "site.php" method= "POST" <?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>>


   
Name:<input type = "text" name="name" >
<span class = "error"><?php echo $nameErr;?> <br><br>

Email:<input type = "text" name="email">
<span class = "error"> <?php echo $emailErr;?><br><br>
Website:<input type = "text" name="website"> 
<span class = "error"> <?php echo $websiteErr;?><br><br>
comments:<textarea name = "comments" rows= "5" cols = "40"></textarea>
<span class = "error"> <?php echo $commentsErr;?>
<br><br>
<h5>Gender</h5>
<input type = "radio" name = "gender"  value = "female"> Female
<input type = "radio" name = "gender"  value = "male"> Male
<input type = "radio" name = "gender"  value = "other"> Other
<span class = "error">*<?php echo $genderErr;?> <br><br>
<input type = "submit" name = "submit" value = "submit"> 
<br><br>

  </form> 
  
  
   <!-- // including html files -
   <! <?php include "header.html"  ?> -->
  <!-- <?php include "footer.html"?> -->
  <?php
  //form required ----
  $nameErr = $emailErr = $websiteErr = $commentsErr = $genderErr = "";
  $name = $email = $website = $comments = $gender = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
          $nameErr = "Name is required";
      } else {
          $name = test_input($_POST["name"]);
      }
      
      if (empty($_POST["email"])) {
          $emailErr = "Email is required";
      } else {
          $email = test_input($_POST["email"]);
      }
      
      if (empty($_POST["website"])) {
          $websiteErr = "Website is required";
      } else {
          $website = test_input($_POST["website"]);
      }
      
      if (empty($_POST["comments"])) {
          $commentsErr = "Comments are required";
      } else {
          $comments = test_input($_POST["comments"]);
      }
      
      if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
      } else {
          $gender = test_input($_POST["gender"]);
      }
  }
  
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
  echo "Your Input:<br>";
  echo "Name: $name <br>";
  echo "Email: $email <br>";
  echo "Website: $website <br>";
  echo "Comments: $comments <br>";
  echo "Gender: $gender <br>";
  
  
  //preg_replace()
  // $str = " I clean everyday";
  // $pattern = "/clean/i";
  // echo preg_replace($pattern, "eat", $str);
  // // preg_match_all()
  // $str = "It rains alot in the plains";
  // $pattern  = "/ains/i";
  // echo preg_match_all($pattern, $str);
  //preg_match()----
  // $str = "visit w3schools";
  // $pattern = "/w3schools/i";
  // echo preg_match($pattern, $str);
//   $name = $email = $webiste = $comments=$gender= "";
//   if ($_SERVER["REQUEST_METHOD"]== "POST"){
// $name = test_input($_POST["name"]);
// $email = test_input($_POST["email"]);
// $website = test_input($_POST["website"]);
// $comments = test_input($_POST["comments"]);
// $gender = test_input($_POST["gender"]);
//   }
 
//   function test_input($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return($data);
//   }
// echo "your Input :<br>";
// echo "name: $name <br>";
// echo "email: $email <br>";
// echo "website: $website <br>";
// echo "gender: $gender <br>";


  
  //FORM VALIDATION
  //for each loop---
  // $animals = array("dog", "cat", "hen", "cow");
  // foreach($animals as $x){
  //   echo "$x <br>";
  // }

  
  //DIRECTORY
  // echo __DIR__
  // INHERITANCE
  
// Base class Teacher
// class Teacher {
//     // Method to teach physics
//     function teachPhysics() {
//         echo "Please teach physics";
//     }

//     // Method to teach math
//     function teachMath() {
//         echo "Please teach math <br>";
//     }
// }

// // Subclass FrenchTeacher inheriting from Teacher
// class FrenchTeacher extends Teacher {
//     // Override method to teach math in French
//     function teachMath() {
//         echo "Teach French";
//     }
// }

// // Creating an instance of Teacher class
// $teacher = new Teacher();
// $teacher->teachMath(); // Output: Please teach math

// // Creating an instance of FrenchTeacher class
// $frenchTeacher = new FrenchTeacher();
// $frenchTeacher->teachMath(); // Output: Teach French

  //GETTER AND SETTERS
//   class Grade {
//     public $name;
//     private $grade;

//     function __construct($name, $grade) {
//         $this->name = $name;
//         $this->setGrade($grade);// to be able to display the setgrade downn below and not any other grades
//     }

//     function getGrade() {
//         return $this->grade;// use to get the grade-calling the grades to the web
//     }

//     function setGrade($grade) {
//         if ($grade == "A" || $grade == "B" || $grade == "C" || $grade == "D") {
//             $this->grade = $grade;// setting the grades to be displayed.
//         } else {
//             return "invalid grade";// in the occurence that you have input an invalid grade
//         }
//     }
// }

// $grade1 = new Grade("name", "yyhhh"); // Creating an instance with invalid grade
// echo $grade1->getGrade(); // Output: invalid grade

  //OBJECT FUNCTIONS
  // class Student{
  //   var $name;
  //   var $major;
  //   var $gpa;
  //   function __construct($name, $major, $gpa){
  //     $this->name = $name;
  //     $this->major = $major;
  //     $this->gpa = $gpa;
  //   }
  //   function hasHonors(){
  //     if($this->gpa >=3.5){
  //       return "true";
  //     }
        
  //         return "false";
        

      
  //   }
  // }
  // $Student1 = new Student ("Teres", "Arts", 4.7);
  // $Student2 = new Student ("emily", "Arts", 2.7);
  // echo $Student2->hasHonors();

  //constructors
//   class Car {
//     var $name;
//     var $model;
//     var $year;

//     function __construct($name, $model, $year){//use underscore then construct ikiwa imeshikana
//         $this->name = $name;
//         $this->model = $model;
//         $this->year = $year;
//     }
// }

// $Car1 = new Car("Benz", "G-wagon", 2022);
// $Car2 = new Car("VW", "Tiguan", 2023);

// echo $Car2->model; // Output: Tiguan

  //objects/data- class is a specification of a custom data type  
  // class Car {
  //   var $name;
  //   var $model;
  //   var $year;
  // }
  // $Car1 = new Car;
  // $Car1-> name = "Benz";
  // $Car1-> model = "G-wagon";
  // $Car1-> year = 2012;
  // echo $Car1->model;

  //including php file
  // $title = "my first page";
  // $author = "chemu";
  // $wordcount = 5000;
  // include "article-header.php";
// include "usefultools.php";
// sayHi(" Chemu");//calling the function that has been included in the above file.

  
  //FOR LOOPS---
//   for($i = 1; $i <= 5; $i++){
// echo "$i <br>";
//   }
//LOOPING THROUGH AN ARRAY----
// $myNumbers= array (23,24,67,90,100);
// for($i = 0; $i < count($myNumbers); $i++){
// echo "$myNumbers[$i] <br>";
// }
//   //WHILE LOOPS--
  // $index = 5;
  // while($index <=10){
  //   echo "$index <br>";
  //   $index++;
  // }
  // DO WHILE LOOPS
  // $index = 11;
  // do{
  //   echo "$index <br>";
  //   $index++;
  // }while($index <=10);
  //switch statements----
// $grade = $_POST["grade"];
// switch($grade){
//   case "A":
//     echo "You did amazing!";
//     break;
//     case "B":
//       echo "You did great!";
//       break;
//       case "c":
//         echo "You did average!";
//         break;
//         case "F":
//           echo "You did fail!";
//           break;
//           default:
//           echo "invalid grade";
// }
  // // calculator-if,elseif,else statements
  // $num1 = $_POST("num1");
  // $num2= $_POST("num2");
  // $op= $_POST("op");
  // if($op == "*"){
  //   echo $num1 * $num2;
  // }
  // elseif($op == "-"){
  //    echo $num1 - $num2;
  // }
  // elseif($op == "+"){
  //   echo $num1 + $num2;
  // }
  // elseif($op == "/"){
  //   echo $num1 / $num2;
  // }
  // else{
  //   echo "Invalid operator";
  // }

  // if cont
//  function getMin($num1,$num2,$num3){
// if($num1<=$num2 && $num1<=$num3){
//    echo $num1;
// }elseif($num2<=$num1 && $num2<=$num3){
//   return $num2;
// }
// else{
//   return $num3;
// }
//  }
//  echo getMin(200,600,900);
?>  


 
</body>
</html>