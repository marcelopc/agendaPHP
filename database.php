<?php
//Deletar Registros
  function DBDelete($table, $where = null, $insertId = false){
    $table = DB_PREFIX.'_'.$table;
    $where = ($where) ? " WHERE {$where}" : null;
    $query = "DELETE FROM {$table}{$where}";
    return DBExecute($query, $insertId);
  }
//altera Registros
  function DBUpDate($table, array $data, $where = null, $insertId = false){
    foreach ($data as $key => $value) {
      $fields[] = "{$key} = '{$value}'";
    }
    $fields = implode(',', $fields);
    $table = DB_PREFIX.'_'.$table;
    $where = ($where) ? " WHERE {$where}" : null;
    $query = "UPDATE {$table} SET {$fields}{$where}";
    return DBExecute($query, $insertId);

  }
//Ler registro
    function DBRead($table, $params = null, $fields = '*'){
      $table = DB_PREFIX.'_'.$table;
      $params = ($params) ? " {$params}" : null;

      $query = "SELECT {$fields} FROM {$table}{$params}";
      $result = DBExecute($query);
      if(!mysqli_num_rows($result))
        //conta quantidades de linhas na seleção, se retornar 0 =false
        return false;
        else {
          while($res = mysqli_fetch_assoc($result)){
            //transforma os campos em um array
            $data[]= $res;
          }
          return $data;
        }

    }
//Grava Registros
    function DBCreate($table, array $data, $insertId = false){
      $table = DB_PREFIX.'_'.$table;
      $data = DBEscape($data);

      $fields = implode(', ', array_keys($data));
      $fieldsv = "'".implode("', '", $data)."'";
      $query = "INSERT INTO {$table} ({$fields}) VALUES({$fieldsv})";
      return DBExecute($query, $insertId);
    }

//Executa Querys
    Function DBExecute($query, $insertId = false){
      $link = DBConnect();
      $result = @mysqli_query($link, $query) or die(mysqli_error($link));

      if($insertId)
        $result = mysqli_insert_id($link);

      DBClose($link);
      return $result;
    }
