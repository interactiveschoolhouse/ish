<?php
namespace ish;
    require_once 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;

    class ContactUsForm {
        public static function isRequestForMe() {
            echo "<div style='color:red'>";
            echo "<div>REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "</div>";
            echo "<div>formid isset: " . isset($_POST['formid']) . "</div>";
            if (isset($_POST['formid'])) {
                echo "<div>formid: " . $_POST['formid'] . "</div>";
            }
            echo "</div>";
            return ($_SERVER['REQUEST_METHOD'] == 'POST' && ContactUsForm::getPostValue('formid') == 'contactUs');
        }

        public static function getPostValue($fieldName) {
            if (isset($_POST[$fieldName]))
            {
                return $_POST[$fieldName];
            }
            return "";
        }

        private $submitResult;

        public function submitForm() {
            $this->submitResult = new ContactUsResult();

            $this->validateForm();

            if ($this->submitResult->isValid()) {
                
                $this->submitResult->formSubmitted();

                echo "contact us successfully submitted!";
            }
            else {
                echo "contact us failed validation!";
                echo "<div>" . $this->submitResult->getFieldError("name") . "</div>";
                echo "<div>" . $this->submitResult->getFieldError("email") . "</div>";
                echo "<div>" . $this->submitResult->getFieldError("comments") . "</div>";
            }

            return $this->submitResult;
        }

        private function validateForm()
        {
            $this->requireField("name", "Name Is Required");
            $this->requireField("comments", "A comment Is Required");
            $this->requireEmail("email", "A valid e-mail address is required");
        }

        private function requireField($name, $message) {
            $value = ContactUsForm::getPostValue($name);
            if ($value == "") {
                $this->submitResult->setFieldError($name, $message);
            }
        }

        private function requireEmail($name, $message)
        {
            $value = ContactUsForm::getPostValue($name);
            $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
            if (!preg_match($pattern, $value)) 
            {
                $this->submitResult->setFieldError($name, $message);
            }
        }

    }

    class ContactUsResult {
        private $_errorFields = [];
        public function hasFieldError($name) {
            return isset($this->_errorFields[$name]);
        }
        public function getFieldError($name) {
            if ($this->hasFieldError($name))
            {
                return $this->_errorFields[$name];
            }
            return "";
        }
        public function setFieldError($name, $errorMessage) {
            $this->_errorFields[$name] = $errorMessage;
        }
        private $_submitted = false;
        public function formSubmitted() {
            $this->_submitted = true;
        }
        public function isSubmitted() {
            return $this->_submitted && $this->isValid();
        }

        public function isValid() {
            return sizeof($this->_errorFields) == 0;
        }
    }
?>