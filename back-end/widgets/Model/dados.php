<?php

    

Class Dados{
    public function getDados($table){

        include (__DIR__.'/../connect.php');

        $sql = ('SELECT * FROM '.$table);
        $stmt = $connPdo ->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            throw new Exception("Nenhum usuário encontrado");
        }
    }
}

Class DadosEspecificos{
    public function getDadosEspecificos($table,$id){

        include (__DIR__.'/../connect.php');

        $sql = ('SELECT * FROM '.$table.' WHERE id= '.$id);
        $stmt = $connPdo ->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            throw new Exception("Nenhum usuário encontrado");
        }
    }
}

Class DeleteDadosEspecificos{
    public function deleteDadosEspecificos($table,$id){

        include (__DIR__.'/../connect.php');

        $sql = ('DELETE FROM '.$table.' WHERE id= '.$id);
        $stmt = $connPdo ->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            throw new Exception("Nenhum usuário encontrado");
        }
    }
}

