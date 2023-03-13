<html>
    <body>
        <h1> The Food Program </h1>
        <?php 
            class Fruit {

                public $name;
                public $corlor;

                public function __construct($name, $corlor) {
                    $this->name = $name;
                    $this->corlor = $corlor; 
                }

                function __destruct() {
                    echo "This fruit: {$this->name} has been destructed.";
                    echo '<br>';
                }

                public function set_name( $name ) { $this->name = $name; }     

                public function set_corlor( $corlor ) { $this->corlor = $corlor; }

                public function get_name() { return $this->name; }

                public function get_corlor() { return $this->corlor; }

                public function intro () {
                    echo "This is {$this->name} and {$this->name} is {$this->corlor}.";
                    echo '<br>';
                }
            }

            // $apple = new Fruit();
            // $banana = new Fruit();
            // $apple->set_name('Apple');
            // $banana->set_name('Banana');

            // echo $apple->get_name();
            // echo '<br>';
            // echo $banana->get_name();

            $strawberry = new Fruit('Strawberry', 'Pink');
            echo $strawberry->get_name();
            echo '<br>';
            echo $strawberry->get_corlor();
            echo '<br>';

            class Cherry extends Fruit {

                public function message () {
                    echo "This is a child {$this->name}";
                    echo '<br>';
                }
            }

            $cherry = new Cherry('Cherry', 'Red');
            $cherry->intro();
            $cherry->message();

            class Watermelon extends Fruit {

                public $weight;

                public function __construct($name, $corlor, $weight) {
                    $this->name = $name;
                    $this->corlor = $corlor;
                    $this->weight = $weight;
                }

                public function intro() {
                    echo "This is {$this->name}, corlor is {$this->corlor} and weight is {$this->weight}.";
                    echo '<br>';
                }
            }

            $watermelon = new Watermelon('Watermelon', 'Green', 43);
            $watermelon->intro();
        ?>
    </body>
</html>