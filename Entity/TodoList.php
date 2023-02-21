<?php


namespace Entitiy {


    class TodoList
    {

        /* Declaring a private property called `todo` of type `string`. */
        private string $todo;


        /**
         * The function takes a string as an argument and assigns it to the property 
         * 
         * @param string todo The todo item to be added to the list.
         */
        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }


        /**
         * This function returns the value of the variable 
         * 
         * @return string The todo property.
         */
        public function getTodo(): string
        {
            return $this->todo;
        }

        

        /**
         * This function sets the todo property to the value of the  parameter
         * 
         * @param string todo The todo item to be added to the database.
         */
        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}
