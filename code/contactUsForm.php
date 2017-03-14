<?php
namespace ish;

    class ContactUsForm {
        public static function isRequestForMe() {
            return (HttpRequest::method() == 'POST' && HttpRequest::form('formid') == 'contactUs');
        }

        function __construct() {
            $this->submitResult = new ContactUsResult();
        }

        private $submitResult;
        private $serverError = false;
        private $contactData;
        public function submitForm() {
            $this->contactData = new ContactUsData();

            $this->validateForm();

            if ($this->submitResult->isValid()) {
                try {
                    $client = new \GuzzleHttp\Client();
                    $response = $client->post(AppSettings::WebApiServiceUrl . '/api/contactus', 
                        [ 
                            'headers'  => [
                                'content-type' => 'application/json', 
                                'Accept' => 'application/json',
                                'api-key' => AppSettings::ApiKey,
                                ],
                            'body' => json_encode($this->contactData)
                        ]);
                    $code = $response->getStatusCode();
                    if ($code != 200) {
                        $this->serverError = true;
                    }
                }
                catch(\Exception $e) {
                    $this->serverError = true;
                }

                if (!$this->serverError) {
                    HttpResponse::redirect("/contact-us.php?success=1");
                }
            }

            return $this->submitResult;
        }

        public function getFieldError($name) {
            return $this->submitResult->getFieldError($name);
        }

        public function getFieldErrorClass($name) {
            if ($this->submitResult->hasFieldError($name)){
                return "form-field--error";
            }
            return "";
        }

        public function getFormErrorClass() {
            if ($this->hasErrors()){
                return "form--error";
            }
            return "";
        }

        public function hasErrors() {
            return !$this->submitResult->isValid(); 
        }

        public function hasServerError() {
            return $this->serverError;
        }

        private function validateForm()
        {
            $this->requireField("name", "Name is required");
            $this->requireField("comments", "A comment is required");
            $this->requireEmail("email", "A valid e-mail address is required");
        }

        private function requireField($name, $message) {
            $value = HttpRequest::form($name);
            if ($value == "") {
                $this->submitResult->setFieldError($name, $message);
            }
        }

        private function requireEmail($name, $message)
        {
            $value = HttpRequest::form($name);
            $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
            if (!preg_match($pattern, $value)) 
            {
                $this->submitResult->setFieldError($name, $message);
            }
        }

    }

    class ContactUsData {
        function __construct() {
            $this->Name = HttpRequest::form("name");
            $this->Address = HttpRequest::form("address");
            $this->Town = HttpRequest::form("town");
            $this->Phone = HttpRequest::form("phone");
            $this->Email = HttpRequest::form("email");
            $this->Comments = HttpRequest::form("comments");
        }

        public $Name;
        public $Address;
        public $Town;
        public $Phone;
        public $Email;
        public $Comments;
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

        public function isValid() {
            return sizeof($this->_errorFields) == 0;
        }
    }
?>