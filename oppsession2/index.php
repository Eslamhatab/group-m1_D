<?php

    abstract class shape{
        protected string $color; 
        protected bool   $filled;
        
        public function __construct(string $color , bool $filled)
        // Contractor
        {
            $this->color =$color; 
            $this->filled = $filled;
        }

        //Getter Function 
        public function getColor():string{
            return $this->color;
        }
        // Setter Function 
        public function setColor(string $color){
            $this->color = $color;
        }
            public function isFilled():bool{
                return $this->filled;
            }

            public function setFilled(bool $filled) :void{
                $this->filled = $filled;
            }
            // Get Area Abstract Function 
            public abstract function getArea();
            // Get Perimeter Abstract Function 
            public abstract function getPerimeter();
    }
    
    class Rectangle extends shape{
    private float $length;
    private float $width; 

    public function __construct(string $color , bool $filled , float $length , float $width) {
    parent::__construct($color , $filled);
    $this->length = $length;
    $this->width  = $width;
    }
    // Getter Function  
    public function getWidth():float{
        return $this->width;
    }
        // Setter Function  
        public function setWidth(float $width):void{
            $this->width = $width;
        }
        // Getter Function  length 
        public function getLength(): float{
            return $this->length;
        }
        // Setter Function  Length
        public function setLength($length):void{
            $this->length = $length;
        }
        
            public function getArea():float{
                return $this->length * $this->width;
            }

            public function getPerimeter():float
            {
                return ($this->length  + $this->width) * 2;
            }

                public function display():void{
                    echo "Rect Color is= " .$this->getColor() . "<br>" . "rect Filled is =". $this->isFilled() . "<br>" . "rectArea is =" . $this->getArea() . "<br>" . "Rect Perimeter is =" . $this->getPerimeter();
                }
}
$rect = new Rectangle("Red" , true ,10 , 20);
$rect->display();
    // $sh = new shape("red" , true);
    // $sh->setColor("blue");

    class Squar extends Rectangle{}

    /***
     * Plymorphism 
     * Overloading => OverRiding 
     * 
     *  Over Loading => Parameter => (signature) => stitic Poymorphism => [Compile Time PloymorPhism ] -> Early Binding 
     *      public function Sum (x , y ){}
     *      public Function sub (x, y , z){}
     *  ovrer Ride => Implementeion => Dynamic Polymorpism [run Time Polymorphism] late-binding 
     *      function Display(){echo "M11_D";}
     *      function diplay(){echo "S1_E"} 
     */
        /***
         *  
         * 
         * 
         */
        interface Crud{
            public function create();
            public function getAll();
            public function getOne(int $id);
            public function update(int $id); 
            public function delete(int $id);
        }
        class user implements Crud {
            public function create(){}
            public function getAll(){}
            public function getOne(int $id){}
            public function update(int $id){} 
            public function delete(int $id){}
        }

        class Employee implements Crud{
            public function create(){}
            public function getAll(){}
            public function getOne(int $id){}
            public function update(int $id){} 
            public function delete(int $id){}
        }