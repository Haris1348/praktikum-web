<?php  
class bmiPasien {
    // Var / properties
    public $nama, $berat, $tinggi, $umur, $jk;
    // bikin construct
    function __construct( $nama, $berat, $tinggi, $umur, $jk){
       $this->nama = $nama;
       $this->berat = $berat;
       $this->tinggi = $tinggi;
       $this->umur = $umur;
       $this->jk = $jk;  
    }
    // fungsi / Method untuk menghitung BMI
    public function hasilBMI() {
        // Vikin var tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);
    }
    // Fungsi / Method untuk menentukan status BMI
    public function statusBMI() {
        //Ambil nilai bmi
        $bmi = $this->hasilBMI();
        // cek status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        }  elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat Badan Normal";
        }  elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        }  else {
            return "Kegemukan (Obesitas)";

        }
               
            }
        }
    
    {
        
    }




?>