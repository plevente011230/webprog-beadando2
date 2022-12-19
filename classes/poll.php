<?php

class Poll {

    private $id;
    private $question;
    private $options = array();
    private $isMultiple;
    private $createdAt;
    private $deadline;
    private $answers = array();
    private $voted = array();
}

?>