 <?php

    class Film extends EntityBase
    {

        private $title;
        private $text;
        private $image;
        private $date;
        private $type;



        /**
         * Get the value of title
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */
        public function setTitle(string $title)
        {

            $this->title = $title;

            return $this;
        }

        /**
         * Get the value of synopsis
         */
        public function getText()
        {
            return $this->text;
        }

        /**
         * Set the value of synopsis
         *
         * @return  self
         */
        public function setText(string $text)
        {

            $this->text = $text;

            return $this;
        }

        /**
         * Get the value of imageUrl
         */
        public function getImage()
        {
            return $this->image;
        }

        /**
         * Set the value of imageUrl
         *
         * @return  self
         */
        public function setImage(string $image)
        {

            $this->image = $image;

            return $this;
        }

        /**
         * Get the value of releaseDate
         */
        public function getDate()
        {
            return $this->date;
        }

        /**
         * Set the value of releaseDate
         *
         * @return  self
         */
        public function setDate($date)
        {
            $this->date = $date;

            return $this;
        }

        /**
         * Get the value of category
         */
        public function getType()
        {
            return $this->type;
        }

        /**
         * Set the value of category
         *
         * @return  self
         */
        public function setType($type)
        {
            $this->type = $type;

            return $this;
        }
    }
