<?php
    require 'DB.php';

    class WeightModel
    {
    private $email;
    private $date;
    private $weight;
    private $fat;
    private $visceral;
    private $bone;
    private $water;
    private $muscles;
    private $physical;
    private $metabolism;
    private $age;
    private $breast;
    private $waist;
    private $hips;

        private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }


    public function setData($email, $date, $weight, $fat, $visceral, $bone, $water, $muscles, $physical, $metabolism, $age, $breast,
                            $waist, $hips)
    {
        $this->email = $email;
        $this->date = $date;
        $this->weight = $weight;
        $this->fat = $fat;
        $this->visceral = $visceral;
        $this->bone = $bone;
        $this->water = $water;
        $this->muscles = $muscles;
        $this->physical = $physical;
        $this->metabolism = $metabolism;
        $this->age = $age;
        $this->breast = $breast;
        $this->waist = $waist;
        $this->hips = $hips;
    }

        public function validForm() {
            if(strlen($this->date) < 8)
                return "Укажите дату взвешивания";
            else if ($this->weight < 40)
                return "Укажите ваш вес";
//            else if ($this->fat <0)
//                return "Укажите содержание жира";
//            else if ($this->visceral <0)
//                return "Укажите содержание висцерального жира";
//            else if ($this->bone <0)
//                return "Укажите костную массу";
//            else if ($this->water <0)
//                return "Укажите содержание воды";
//            else if ($this->muscles <0)
//                return "Укажите мышечную массу";
//            else if ($this->physical <0)
//                return "Укажите физический тип";
//            else if ($this->metabolism <0)
//                return "Укажите каллории";
            else if ($this->breast < 40)
                return "Укажите объем груди";
            else if ($this->waist < 40)
                return "Укажите объем талии";
            else if ($this->hips < 40)
                return "Укажите объем бедер";
            else
                return "Верно";
        }

    public function addResult()
    {
            $sql = 'INSERT INTO `resultWeight` (`email`, `date`, `weight`, `fat`, `visceral`, `bone`, `water`, `muscles`, `physical`, `metabolism`, `age`, `breast`, `waist`, `hips`)
                    VALUES(:email, :date, :weight, :fat, :visceral, :bone, :water, :muscles, :physical, :metabolism, :age, :breast, :waist, :hips)';

        $query = $this->_db->prepare($sql);

        $query->execute(['email' => $this->email, 'date' => $this->date, 'weight' => $this->weight, 'fat' => $this->fat, 'visceral' => $this->visceral, 'bone' => $this->bone,
            'water' => $this->water, 'muscles' => $this->muscles, 'physical' => $this->physical, 'metabolism' => $this->metabolism,
            'age' => $this->age, 'breast' => $this->breast, 'waist' => $this->waist, 'hips' => $this->hips]);

        Header('Location: /user/dashboard');
    }

        public function getResult($email) {
            $this->email = $email;
//            $email = $_COOKIE['log'];
            $result = $this->_db->query("SELECT * FROM `resultweight` WHERE `email` = '$email'");

            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

}