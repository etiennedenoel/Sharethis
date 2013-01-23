<?php
    class M_connex extends  CI_Model
    {

        public function verification($data){

            $query = $this->db->get_where('membres', array('userName' => $data['user'], 'passwordUser' => $data['password']));

            return array('ok' => $query->num_rows(), 'data' => $query->row());

        }

        public function inscription($data){

            $dataInsc = array('userName' => $data['user'], 'passwordUser' => $data['password']);

            $this->db->insert('membres', $dataInsc);

        }
    }
