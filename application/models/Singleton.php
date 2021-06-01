<?php

// Sudah menggunakan prinsip singleton.
class Database {
    
    // Bikin wadah untuk menampung objek.
    private static $instance = null;
    
    public function __construct()
    {
        // Misal disini kode koneksi ke database.
        // Kalau di PHP misalnya saja mysqli_connect atau PDO connection.
        $koneksi = mysqli_connect("localhost","root","","tpmod6_dipl");
 
        // Check connection
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    // Ini method pamungkas buat bikin objek, tidak perlu pakai new lagi.
    public static function getInstance()
    {
        // Self sama kegunaanya dengan $this, tapi khusus untuk static property.
        // Disini kita cek apakah sebelumnya instance sudah bikin apa belum untuk cegah double.
        // Kalau belum pernah dibikin kita new! kalau sudah kembalikan yang sudah ada.
        if (self::$instance == null) {
            self::$instance = new Database();
        } 

        // Kembalikan.
        return self::$instance;
    }

    // Method seperti biasanya.
    public function query($sql)
    {
        echo "Mengeksekusi \"{$sql}\" ..<br/>";
    }
}

// Menginstansiasi database, via getInstance, tidak new lagi.
$db = Database::getInstance();

// Melakukan query.
$db->query("SELECT * FROM mahasiswa");
?>