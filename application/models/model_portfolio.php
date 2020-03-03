<?php

class Model_Portfolio extends Model
{
    public function get_data()
    {

        $sql = 'SELECT Id, Year, Site, Description FROM porfolio';

        $result = mysqli_query($this->link, $sql);

        return $result;

    }

}

