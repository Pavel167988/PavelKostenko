<?php
    interface LoggerIntereface{
        /**
         * @var string
         */
        public function  addMessage ($message);
        public function showLog(): string ;

    }

    class FileLogger implements LoggerIntereface {
        public function addMessage($message)
        {
            // TODO: Implement addMessage() method.
        }

        public function showLog(): string
        {
            // TODO: Implement showLog() method.
        }

    }
