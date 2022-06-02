<?php

class FilmsManager extends BaseManager
{

    public function create(Film $film)
    {
        $req = $this->pdo->prepare("INSERT INTO `film` (title, text, image, date, type ) VALUES (:title, :text, :image, :date, :type)");

        $req->bindValue(":title", $film->getTitle(), PDO::PARAM_STR);
        $req->bindValue(":text", $film->getText(), PDO::PARAM_STR);
        $req->bindValue(":image", $film->getImage(), PDO::PARAM_STR);
        $req->bindValue(":date", $film->getDate(), PDO::PARAM_STR);
        $req->bindValue(":type", $film->getType(), PDO::PARAM_INT);

        $req->execute();
    }

    public function update(Film $film)
    {
        $req = $this->pdo->prepare("UPDATE `film` SET title = :title, text = :text, image = :image, date = :date, type = :type WHERE id = :id");

        $req->bindValue(":title", $film->getTitle(), PDO::PARAM_STR);
        $req->bindValue(":text", $film->getText(), PDO::PARAM_STR);
        $req->bindValue(":image", $film->getImage(), PDO::PARAM_STR);
        $req->bindValue(":date", $film->getDate(), PDO::PARAM_STR);
        $req->bindValue(":type", $film->getType(), PDO::PARAM_INT);
        $req->bindValue(":id", $film->getId(), PDO::PARAM_INT);
        $req->execute();
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM `film` WHERE id = $id";
        $req = $this->pdo->query($sql);

        /* $req->bindValue(":id", $id, PDO::PARAM_INT);*/
        $data = $req->fetch();

        return new Film($data);
    }
    public function getAll()
    {

        $req = $this->pdo->query("SELECT * FROM film ORDER BY id DESC");
        $films = array();


        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $films[] = new Film($data);
        }

        return $films;
    }
}
