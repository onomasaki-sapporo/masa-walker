<?php 
class MTop {
  private $db = null;
  private $pdo = null;

  function __construct() {
    $this->db = new Database();
    $this->pdo = $this->db->connectDb();
  }

  function getProfile() {
    $sql = 'SELECT'
         . '  * '
         . 'FROM'
         . '  profile;';

    return $this->db->fetch($this->pdo, $sql, array());
  }

  function getImgPath($param) {
    $sql = 'SELECT'
         . '  img_path '
         . 'FROM'
         . '  reference_img '
         . 'WHERE'
         . '  img_type IN (?);';

    return $this->db->fetchAll($this->pdo, $sql, $param);
  }

  function getNews() {
    $sql = 'SELECT'
         . '  * '
         . 'FROM'
         . '  news '
         . 'ORDER BY'
         . '  update_date '
         . '  DESC '
         . 'LIMIT'
         . '  5;';

    return $this->db->fetchAll($this->pdo, $sql, array());
  }

}
