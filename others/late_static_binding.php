
<!-- http://stackoverflow.com/questions/1912902/what-exactly-are-late-static-bindings-in-php -->
<?php
    class Car
    {
        public static function run()
        {
            return static::getName();
            // return self::getName();
        }

        private static function getName()
        {
            return 'Car';
        }
    }

    class Toyota extends Car
    {
        public static function getName()
        {
            return 'Toyota';
        }
    }

    echo Car::run(); // Output: Car
    echo Toyota::run(); // Output: Toyota
?>