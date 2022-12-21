<?php
namespace models;

class menu extends database
{
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO menus(nom_menu) VALUES(?)", $data);
    }

    public function Update(array $data){
        $this->SendData("UPDATE menus SET nom_menu=?, WHERE Id=?",$data);
    }

    public function Delete(int $id){
        $this->SendData("DELETE FROM menus WHERE Id=?",[$id]);
    }

    public function GetAll(): array{
        return $this->GetManyData("SELECT nom_menu,FROM menus",NULL);
    }
}