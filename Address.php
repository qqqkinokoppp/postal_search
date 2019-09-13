<?php
    require_once('Base.php');
    class Address extends Base
    {
        /**
         * 住所取得メソッド
         * @var int $id
         * @return array $rec 
         */
        public function getAddress($postal_code)
        {
            $sql = '';
            $sql .='SELECT prefecture,adress1,address2 FROM postal_code ';//SQL文の結合をするとき、文末にスペースを入れる！！！
            $sql .='WHERE postal_code=:postal_code';
            $stmt = $this ->dbh ->prepare($sql);
            $stmt ->bindParam(':postal_code', $postal_code, PDO::PARAM_STR);
            $stmt ->execute();
            $rec = $stmt ->fetch(PDO::FETCH_ASSOC);
            return $rec;
            
        }
    }
?>