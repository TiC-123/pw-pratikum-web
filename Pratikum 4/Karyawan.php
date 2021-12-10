<?php

    abstract class Karyawan {
        private $nama;
        private $kelamin;
        private $tempatLahir;
        private $tanggalLahir;

        public function __construct( $nama, $kelamin, $tempatLahir, $tanggalLahir ) {
            $this->nama = $nama;
            $this->kelamin = $kelamin;
            $this->tempatLahir = $tempatLahir;
            $this->tanggalLahir = $tanggalLahir;
        }

        public function getNama(): string {
            return $this->nama;
        }

        public function getKelamin(): string {
            return $this->kelamin;
        }

        public function getTempatLahir(): string {
            return $this->tempatLahir;
        }

        public function getTanggalLahir(): string {
            return $this->tanggalLahir;
        }

        abstract public function setStatus();
    }

?>