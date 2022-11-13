<?php

$db = new \model\Database();

class Post {
    //$db = new \model\Database();
    public $heading;
    public $message;
    public $errors = [];

    public function __construct($heading,$message) {
        $this->heading = $heading;
        $this->message = $message;
    }

    public function isHeaderValid()
    {
        if (mb_strlen($this->heading) < 2 || mb_strlen($this->heading) > 20)
        {
            $this->errors[] = 'Заголовок должен иметь не меньше 2 символов и не больше 20 символов';
            return false;
        } else
        {
            return true;
        }
    }

    public function isMessageValid()
    {
        if (mb_strlen($this->message) < 10 || mb_strlen($this->message) > 250)
        {
            $this->errors[] = 'Текст должен иметь не меньше 10 символов и не меньше 250 символов';
            return false;
        } else
        {
            return true;
        }
    }

    public function addToBase() {
        $sql = 'INSERT INTO posts (id, heading, message)
            VALUES (NULL, :heading, :message)';
        $stmt = $db->dbh->prepare($sql);
        $result = $stmt->execute([
            'heading' => $this->heading,
            'message' => $this->message,
        ]);
    }

}