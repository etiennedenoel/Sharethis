<?php
    class M_Curling extends  CI_Model
    {
        
        public function lister()
        {
            $this->db->select('*');
            $this->db->from('sites');
            
            $query = $this->db->get();
            return $query->result();
        }
        
        public function inserer($data)
        {
            $this->db->insert('sites', array('title' => $data['titre'],
                                             'desc' => $data['description'],
                                             'url' => $data['lien'],
                                             'src' => $data['img']));
        }
        public function supprimer($data){
            $this->db->delete('sites', array('id'=>$data));
            return true;
        }
        
        public function modifier($id, $data)
        {
            $this->db->where('id', $id);
            $this->db->update('sites', array('title' => $data['titre'],
                                             'desc' => $data['description'],
                                             'url' => $data['lien'],
                                             'src' => $data['img']));
        }
        
         public function voir($id)
        {
            $this->db->select('*');
            $this->db->from('sites');
            $this->db->where('id', $id);
            $query = $this->db->get();
            return $query->row();
        }
      
    }