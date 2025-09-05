<?php
class MyClass {
    public function heading() {
        echo "Welcome to BBIT Devops!";
    }

    public function myMethod() {
        echo "<p>This is a new semster.</p>";
    }

    public function footer(){
        echo "<footer>Contact us <a href='malito:info@bbit.edu'>info@bbit.edu</a></footer>";
    }
}

//create an instance of MyClass
    $instance = new MyClass();

//call the method myMethod
    $instance->heading();
    $instance->myMethod();
    $instance->footer();

