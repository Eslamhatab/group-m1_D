|<?php
echo "<h1>Object Oriented Programming</h1>";

        /***
         * 1- Emcapsulation = Hide Data 
         * 2- Abstraction   = What_Object_Dose  = Hide _Unneccessary Details 
         * 3- Inheritance   = Child Class = Parent Class = More_Reusable 
         * 4- ploymorephism = Over Load  => Defferent Prameter  
         *                  = Over Lade  => Implementation 
         *  interace 
         * final Class 
         */

            class student {
                // Attribites , data Members , fields  => Variables
                    // public , protected  , privete 
                        public int $stdId; 
                        public string $stdName;
                        public float $stdGrade; 
                
                    }

            $std = new student();
            $std->stdId = 1;
            $std->stdName = "M1_D";
            $std->stdGrade = 90.0;
            var_dump($std);
                        echo "<br>";
            
                        class employee{
                private int    $empId; 
                private string $empName; 
                private float  $empSalary;
                    // 
                    public function __construct(int $id , string $name , float $salary)
                    {
                        $this->empId     = $id;
                        $this->empName   = $name; 
                        $this->empSalary = $salary;
                    }
                    // Setter  => SetName  
                    public function setName($name):void{
                        $this->empName = $name;
                    }

                    //Getter  
                    public function getName():string{
                        return $this->empName;
                    }

                    public function display():void{
                        echo  "Emp Name " . $this->empName
                        ."<br>" ."empsaalary " . $this->empSalary 
                        ."<br>";
                    }
            }

            $emp = new employee(1 , "m1_D" , 200.15);
            $emp->setName("Ahmed");
            $emp->display();


                class Rectangle {
                    private float $width;
                    private float $length;

                    public function __construct( float $width , float $length )
                    {
                        $this->length = $length; 
                        $this->width  = $width;
                    }
                            // Setter And Getter Length
                    public function setLength(float $length):void{
                        $this->length = $length;
                    }
                    public function getLength():float{
                        return $this->length;
                    }
                        // Setter And Getter Width 
                        
                    public function setwidth(float $width):void{
                        $this->width = $width;
                    }
                    public function getwidth():float{
                        return $this->width;
                    }
                        public function getArea():float{
                            return $this->length * $this->width;
                        }
                        public function getPerimeter():float{
                            return ($this->length + $this->width) *2;
                        }
                        public function display():void{
                            echo "Rect Area= " .$this->getArea() . "<br>" ."Rect Perimter = " .$this->getPerimeter();
                        }
                }
                $rect = new Rectangle(10 , 20);
                $rect->display();
            

                //Inhertince 
                    //protected 
                     class Animal {
                        // private int $id;
                        protected string $name;

                        public function __construct(string $name)
                        {
                            $this->name =$name; 
                            // $this->id = $id;
                        }
                        public function display(){}
                    }
                    
                        class Cat extends Animal {
            
                            public function __construct(string $name)
                            {
                                parent::__construct($name);
                            
                            }
                                public function display()
                                {
                                    echo "Meow";
                                }
                        }
                        $cat = new Cat("Tom");
                        $cat->display();


                        class Dog extends Animal{}

                        class Person { 
                            protected string $name; 
                            protected string $address; 

                            public function __construct(string $name , string $address){
                                $this->name    = $name;
                                $this->address = $address;
                            }

                            public function getName():string{
                                return $this->name;
                            }

                            
                            public function getaddress():string{
                                return $this->address;
                            }

                            
                            public function setAddress($address):void {
                                $this->address = $address;
                            }

                            public function toString(){
                                return $this->name  .  $this->address;
                            }
                        }

                        class Students extends Person{
                            private string $program; 
                            private int    $years; 
                            private float  $fee;
                            public function __construct(string $name , string $address , string $program , int $years , float $fee)
                            {
                                parent::__construct($name , $address);
                                $this->program = $program; 
                                $this->years   = $years; 
                                $this->fee     = $fee;
                            }
                            
                            public function toString(){
                                echo "Std Name = " .$this->getName() . "Std Address" . $this->getaddress();
                            }
                            
                        }

                        $std = new Students();