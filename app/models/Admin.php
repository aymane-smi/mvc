<?php
class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function login($username, $password)
    {
        $this->db->query("SELECT * FROM Admin WHERE username = :username;");
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        if (password_verify($password, $row->password))
            return $row;
        else
            return false;
    }

    public function signup($username, $password)
    {
        $option = [
            'cost' => 12,
        ];
        $password = password_hash($password, PASSWORD_BCRYPT, $option);
        $this->db->query("INSERT INTO Admin(username, password) VALUES(:username, :password)");
        $this->db->bind(":username", $username);
        $this->db->bind(":password", $password);
        $this->db->execute();
    }

    public function edit($id, $username = null, $password = null)
    {
        if (!is_null($username)) {
            $this->db->query("UPDATE Admin SET username = :username WHERE id = :id");
            $this->db->bind(":id", $id);
            $this->db->bind(":username", $username);
            $this->db->execute();
            return "username changed!";
        } else if (!is_null($password)) {
            $option = [
                'cost' => 12,
            ];
            $password = password_hash($password, PASSWORD_BCRYPT, $option);
            $this->db->query("UPDATE Admin SET password = :password WHERE id = :id");
            $this->db->bind(":id", $id);
            $this->db->bind(":password", $password);
            $this->db->execute();
            return "password changed";
        }

        return false;
    }
}
