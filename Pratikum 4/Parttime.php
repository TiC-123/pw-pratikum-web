<?php 
    require_once 'Karyawan.php';
    require_once 'Level.php';
    
    class Parttime extends Karyawan implements Level {
        private $status;
        private $levelKaryawan;
        private $gajiKaryawan;

        public function setStatus() {
            $this->status = "Parttime";
        }

        public function getStatus(): string {
            return $this->status;
        }

        public function setLevelKaryawan( $levelKaryawan ) {
            $this->levelKaryawan = $levelKaryawan;
        }

        public function getLevelKaryawan(): string {
            return $this->levelKaryawan;
        }

        public function hitungGaji() {
            switch( $this->levelKaryawan ) {
                case "Junior" : 
                    $this->gajiKaryawan = 2000000;

                    if( $this->status == "Parttime" )
                        $this->gajiKaryawan /= 2;

                    break;
                case "Amateur":
                    $this->gajiKaryawan = 3500000;

                    if( $this->status == "Parttime" )
                        $this->gajiKaryawan /= 2;

                    break;
                case "Senior":
                    $this->gajiKaryawan = 5000000;

                    if( $this->status == "Parttime" )
                        $this->gajiKaryawan /= 2;

                    break;
            }
        }

        public function getGaji(): int {
            return $this->gajiKaryawan;
        }
    }

?>