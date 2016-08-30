<?php
class CommentsModel extends BaseModel
{
    public function getAll() : array
    {
        $statement = self::$db->query(
            "SELECT * FROM comments ORDER BY date DESC ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM comments WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function create(string $content, int $user_id) : bool
    {
        $statement = self::$db->prepare(
            "INSERT INTO comments(content, user_id) VALUES(?, ?)");
        $statement->bind_param("si",$content, $user_id);
        $statement ->execute();
        return $statement->affected_rows == 1;
    }


    public function delete(int $id) : bool
    {
        $statement = self::$db->prepare(
            "DELETE FROM comments WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}