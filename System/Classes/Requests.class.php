<?php

class Requests {
    public function createRequests($table,$data) {
        global $dbc;
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $dbc->query($sql) or die($this->conn->error);
        return $result;

    }

    // GET PENDING REQUESTS BY ID
    public function getRequestsById(int $request_id):array {
        global $dbc;
        $sql = "SELECT * FROM `requests` travel_info WHERE `unique_id` = $request_id";
        $result = $dbc->query($sql) or die($dbc->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $request = $row;
            }
        }
        return $request ?? [];
    }
}