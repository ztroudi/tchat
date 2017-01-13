<?php

/**
 * Class PagesController
 */
class PagesController {

    public function home() {
        if (!isset($_SESSION['name'])) {
            $this->connect();
        } else {

            // $aPosts used in view
            $aPosts = Post::all();
            require_once('views/pages/home.php');
        }
    }

    public function connect() {

        // formkey used to secure the form by adding generated hidden key
        require_once('lib/formKey.php');
        $formKey = new formKey();

        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Validate the form key
            if (!isset($_POST['form_key']) || !$formKey->validate()) {

                //Form key is invalid, show an error
                $error = 'Form key error!';
            } else {
                $error = '';
                if (isset($_POST['enter'])) {
                    if ($_POST['name'] != "") {

                        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
                        $this->home();
                        exit();
                    } else {
                        echo '<span class="error">Please type in a name</span>';
                    }
                }
            }
        }

        require_once('views/pages/connect.php');
    }

    public function disconnect() {
        unset($_SESSION['name']);
        $this->home();
    }

    public function error() {
        require_once('views/pages/error.php');
    }

}
