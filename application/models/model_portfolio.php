<?php

class Model_Portfolio extends Model
{
    public function get_data($name_table)
    {
        return mysqli_query($this -> link, "SELECT * FROM `$name_table`");
    }
}


