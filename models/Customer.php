<?php
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }
//SELECT `bid`, `email`, `carno`, `price`, `dat`, `time`, `status`, `pid`, `id`, `created_at` FROM `booking` WHERE 1
    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO booking (id, email, carno, price, dat, time, status, pid  ) VALUES(:id, :email, :carno, :price, :dat, :time, :status, :pid)');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':carno', $data['carno']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':dat', $data['dat']);
      $this->db->bind(':time', $data['time']);
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':pid', $data['pid']);
     
      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getCustomers() {
      $this->db->query('SELECT * FROM booking ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }