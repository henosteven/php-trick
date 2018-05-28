<?php

interface iLogger {
    public function log($string);
}

class ApplicationLogger {

    private $_logger = null;

    public function log($data) {
        $this->_logger->log($data);
    }

    public function setLogger(iLogger $logger) {
        $this->_logger = $logger;
    }
}

$appLogger = new ApplicationLogger();
$appLogger->setLogger(new class implements iLogger {
    public function log($string) {
        echo 'yes~logger-implement-iLogger', $string ;
    }
});

$appLogger->log('jinjing');