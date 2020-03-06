<?php


class Model_Edit_Portfolio extends Model
{
    public function get_data($name_table)
    {
        return mysqli_query($this -> link, "SELECT * FROM `$name_table`");
    }

    public function insert_data($name_table, $table_params, $values)
    {
        $res = mysqli_query($this->link, "INSERT INTO `$name_table` ($table_params) VALUES($values)");
        if (!$res) {
            die(mysqli_error($this->link));
        }
    }

    public function delete_data($name_table, $elem_id)
    {
        $res = mysqli_query($this->link, "DELETE FROM `$name_table` WHERE id = $elem_id");
        if (!$res) {
            die(mysqli_error($this->link));
        }
    }

    public function update_data($name_table, $update_params, $elem_id)
    {
        $res = mysqli_query($this->link, "UPDATE `$name_table` SET $update_params WHERE id = $elem_id");
        if (!$res) {
            die(mysqli_error($this->link));
        }
    }
}