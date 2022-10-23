<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            class Student {
                var $name;
                var $major;
                var $gpa;

                function __construct($name, $major, $gpa){
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors(){
                    // have gpa above 3.5, then on the honor role
                    if($this->gpa >= 3.5){
                        return true;
                    } else {
                        return false;
                    }
                }
            }

            $student1 = new Student("Jim", "Business", 2.8);
            $student2 = new Student("Pam", "Art", 3.6);

            $students = array($student1, $student2);
            
            foreach($students as $i => $i_object){
                if($i_object->hasHonors()){
                    echo "$i_object->name is on the Honor Role!<br>";
                } else {
                    echo "$i_object->name is not a Honor Role student.<br>";
                }
            }
            
            
        ?>
    </body>
</html>