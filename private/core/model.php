<?php
/**
 * Main Model
 */

class Model extends Database
{

    //protected $table = "users";

    function __construct()
    {
        if(!property_exists($this, 'table'))
        {
            $this->table = strtolower($this::class) . "s";
        };
    }

    public function where($column, $value)
    {
        // var_dump($column);
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        $data =  $this->run($query, [
            'value' => $value
        ]);

        if(is_array($data)){
            if(property_exists($this, 'afterSelect'))
            {
                foreach($this->afterSelect as $func)
                {
                    $data = $this->$func($data);
                }
            }
        }

        return $data;
    }

    public function first($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        $data =  $this->run($query, [
            'value' => $value
        ]);

        if(is_array($data)){
            if(property_exists($this, 'afterSelect'))
            {
                foreach($this->afterSelect as $func)
                {
                    $data = $this->$func($data);
                }
            }
        }

        if(is_array($data)){
            $data = $data[0];
        }

        return $data;
    }

    public function findAll()
    {
        $query = "select * from $this->table";
        $data = $this->run($query);

        if(is_array($data)){
            if(property_exists($this, 'afterSelect'))
            {
                foreach($this->afterSelect as $func)
                {
                    $data = $this->$func($data);
                }
            }
        }

        return $data;
    }

    public function insert($data)
    {
        // var_dump($data);
        // var_dump(property_exists($this, 'beforeInsert'));
        if(property_exists($this, 'allowedColumns'))
        {
            foreach($data as $key => $col)
            {
                if(!in_array($key, $this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'beforeInsert'))
        {
            foreach($this->beforeInsert as $func)
            {
                $data = $this->$func($data);
            }
        }

        $keys = array_keys($data);
        $column = implode(',', $keys);
        $value = implode(',:', $keys);
        
        $query = "INSERT INTO $this->table ($column) VALUES (:$value)";
        // var_dump($query);
        return $this->run($query, $data);
    }

    public function update($id, $data)
    {
        $str = "";

        foreach($data as $key => $value){
            $str .= $key . "=:" . $key . ",";
        }

        $str = trim($str, ",");
        $data['id'] = $id;
        $query = "update $this->table set $str where id = :id";
        return $this->run($query, $data);
    }

    public function delete($id)
    {
        $query = "delete from $this->table where id = :id";
        $data['id'] = $id;
        return $this->run($query,$data);
    }
}