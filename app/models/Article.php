<?php
class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM Article");
        $this->db->execute();
        $row = $this->db->resultSet();
        return $row ? $row : false;
    }

    public function getById($id)
    {
        $this->db->query("SELECT * FROM Article WHERE id = :id");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        $this->db->execute();
        $row = $this->db->single();
        return $row ? $row : false;
    }

    public function addArticle($nom, $prix, $img)
    {
        $this->db->query("INSERT INTO Article(nom, prix, img) VALUES(:nom, :prix, :img)");
        $this->db->bind(":nom", $nom);
        $this->db->bind(":prix", $prix);
        $this->db->bind(":img", $img);
        $this->db->execute();
        if ($this->db->single())
            return true;
        else
            return false;
    }

    public function editArticle($id, $nom, $prix, $img = null)
    {
        $key = false;
        $this->db->query("UPDATE Article SET nom = :nom, prix = :prix WHERE id = :id");
        $this->db->bind(":nom", $nom);
        $this->db->bind(":id", $id);
        $this->db->bind(":prix", $prix);
        $this->db->execute();
        if (!is_null($img)) {
            $this->db->query("UPDATE Article SET img = :img WHERE id = :id");
            $this->db->bind(":img", $img);
            $this->db->bind(":id", $id);
            $this->db->execute();
        }
        $key = true;

        return $key ? "article updated" : false;
    }


    public function removeById($id)
    {
        $this->db->query("DELETE FROM Article WHERE id = :id");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        $this->db->execute();
        return  "article deleted";
    }
}
