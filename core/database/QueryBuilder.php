<?php

class QueryBuilder
{
   public $pdo;

   public function __construct(PDO $pdo) {
      $this->pdo = $pdo;
   }


   public function selectAll($table)
   {
      $statement = $this->pdo->prepare("SELECT * FROM ${table} ORDER BY id DESC");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
   }


   public function insert($table, $parameters)
   {
      // insert into %s ($s) (:%s)

      $sql = sprintf(
         "INSERT INTO %s (%s) VALUES (%s)",
         $table,
         implode(', ', array_keys($parameters)),
         ':'.implode(', :', array_keys($parameters))
      );

      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
   }


   public function update($table, $parameters, $id)
   {
      // UPDATE users SET name=:name, surname=:surname WHERE id=:id

      $sql = sprintf(
         "UPDATE %s SET %s WHERE id=:id",
         $table,
         implode(" ",array_map(function($param, $value){
            return "$param=:$param";
         }, array_keys($parameters), $parameters)),
         $id
      );

      $statement = $this->pdo->prepare($sql);

      // adding the id parameter to execute the statement
      $parameters['id'] = $id;

      $statement->execute($parameters);
   }


   public function delete($table, $id)
   {
      // insert into %s ($s) (:%s)

      $sql = sprintf(
         "DELETE FROM %s WHERE id=%s",
         $table,
         $id[0]
      );

      $statement = $this->pdo->prepare($sql);

      $statement->execute($id);
   }
}