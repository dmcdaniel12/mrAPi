<?php

require_once __DIR__ . '/../Database/Database.php';

class Articles extends Database
{
    
    public function getArticle($id)
    {
        if(!$id)
        {
            return $this->select('article','*');
        }
        else
        {
            return $this->select('article','*',["id" => $id]);
        }
    }
    
    public function createArticle($arrArticle)
    {
        $this->insert('article',$arrArticle);
    }
    
    public function updateArticle($arrArticle,$id)
    {
        $this->update('article',$arrArticle, ["id" =>$id]);
    }
    
    public function deleteArticle($id)
    {
        $this->delete('article',["id" => $id]);
    }
    
}