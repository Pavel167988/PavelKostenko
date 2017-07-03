<?php
    class laptop {
        private $keyboard;
        private $video;
        private $kernels;

        /**
         * @return mixed
         */
        public function getKeyboard()
        {
            return $this->keyboard;
        }

        /**
         * @param mixed $keyboard
         */
        public function setKeyboard($keyboard)
        {
            $this->keyboard = $keyboard;
        }

        /**
         * @return mixed
         */
        public function getVideo()
        {
            return $this->video;
        }

        /**
         * @param mixed $video
         */
        public function setVideo($video)
        {
            $this->video = $video;
        }

        /**
         * @return mixed
         */
        public function getKernels()
        {
            return $this->kernels;
        }

        /**
         * @param mixed $kernels
         */
        public function setKernels($kernels)
        {
            $this->kernels = $kernels;
        }


        function kolKer($kernels){
            echo $this->$kernels;

        }

        function video ($video){
            echo $video;
        }

    }
