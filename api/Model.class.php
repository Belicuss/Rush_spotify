<?php

class Model extends DatabaseConn
{
    private $db = null;
    public function __construct()
    {
        $this->db = $this->connect();
    }
    //All our requests to the database
    public function getAllAlbums($limit = null)
    {
        $sql = "SELECT *
        FROM albums";
        if ($limit !== null) {
            $sql .= " limit :lim"; // If we only want to get a certain amount of albums
        }
        $statement = $this->db->prepare($sql);
        if ($limit !== null) {
            $statement->bindParam(":lim", $limit, PDO::PARAM_INT); // If we only want to get a certain amount of albums
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getAlbum(string $name, $limit = null)
    {
        $sql = "SELECT *, albums.name album_name,
        FROM albums
        -- left join tracks on albums.id = tracks.album_id
        where albums.name like '%:name%'";
        if ($limit !== null) {
            $sql .= " limit :lim"; // If we only want to get a certain amount of albums
        }
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':name', $name);
        if ($limit !== null) {
            $statement->bindParam(":lim", $limit, PDO::PARAM_INT); // If we only want to get a certain amount of albums
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getAlbumsByGenre(string $genreId)
    {
        $sql = "SELECT *
        FROM albums
        LEFT join genres_albums g on g.album_id = albums.id
        WHERE genre_id = :genre_id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':genre_id', $genreId);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getAlbumsByArtist(string $artistId)
    {
        $sql = "SELECT *
        FROM albums
        where artist_id = :artist_id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':artist_id', $artistId);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getTracksByAlbum(string $albumId)
    {
        $sql = "SELECT *
        FROM tracks
        WHERE album_id = :album_id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':album_id', $albumId);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getArtists(string $name, $limit = null)
    {
        $sql = "SELECT * from artists
        where artists.name like concat('%', :name, '%')";
        if ($limit !== null) {
            $sql .= " limit :lim"; // If we only want to get a certain amount of artists
        }
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':name', $name);
        if ($limit !== null) {
            $statement->bindParam(":lim", $limit, PDO::PARAM_INT); // If we only want to get a certain amount of albums
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getAllArtists(int $limit = null)
    {
        $sql = "SELECT *
        FROM artists";
        if ($limit !== null) {
            $sql .= " limit :lim"; // If we only want to get a certain amount of albums
        }
        $statement = $this->db->prepare($sql);
        if ($limit !== null) {
            $statement->bindParam(":lim", $limit, PDO::PARAM_INT); // If we only want to get a certain amount of albums
        }
        $statement->execute();
        return $statement->fetchAll();
    }
}
