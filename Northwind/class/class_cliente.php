<?php
    require_once('class_connection.php');

    class Cliente {
        private $codigo;
        private $companyName;
        private $contactName;
        private $contactTitle;
        private $address;
        private $city;
        private $region;
        private $postalCode;
        private $country;
        private $phone;
        private $fax;

        public function getCodigo() {
            return $this->codigo;
        }

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function getCompanyName() {
            return $this->companyName;
        }

        public function setCompanyName($companyName) {
            $this->companyName = $companyName;
        }

        public function getContactName() {
            return $this->contactName;
        }

        public function setContactName($contactName) {
            $this->contactName = $contactName;
        }

        public function getContactTitle() {
            return $this->contactTitle;
        }

        public function setContactTitle($contactTitle) {
            $this->contactTitle = $contactTitle;
        }

        public function getAddress() {
            return $this->address;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function getCity() {
            return $this->city;
        }

        public function setCity($city) {
            $this->city = $city;
        }

        public function getRegion() {
            return $this->region;
        }

        public function setRegion($region) {
            $this->region = $region;
        }

        public function getPostalCode() {
            return $this->postalCode;
        }

        public function setPostalCode($postalCode) {
            $this->postalCode = $postalCode;
        }

        public function getCountry() {
            return $this->country;
        }

        public function setCountry($country) {
            $this->country = $country;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }

        public function getFax() {
            return $this->fax;
        }

        public function setFax($fax) {
            $this->fax = $fax;
        }

        private function SelectAll() {
            $consulta = Conexao::Conectar()->prepare("SELECT * FROM customers");
            $consulta->execute();

            while($aLinha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $oCliente = new Cliente;
                $oCliente->setCodigo($aLinha['customer_id']);
                $oCliente->setCompanyName($aLinha['company_name']);
                $oCliente->setContactName($aLinha['contact_name']);
                $oCliente->setContactTitle($aLinha['contact_title']);
                $oCliente->setAddress($aLinha['address']);
                $oCliente->setCity($aLinha['city']);
                $oCliente->setRegion($aLinha['region']);
                $oCliente->setPostalCode($aLinha['postal_code']);
                $oCliente->setCountry($aLinha['country']);
                $oCliente->setPhone($aLinha['phone']);
                $oCliente->setFax($aLinha['fax']);
                $aResultado[] = $oCliente;
            }
            return $aResultado;  
        }
    }
?>