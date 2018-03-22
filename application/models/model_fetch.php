<?php


class model_fetch extends CI_Model{

    public function fetch_owner()
    {
    	$query = $this->db->get("owner");

    	return $query;
       
     }
     public function fetch_vehical()
    {
    	$query = $this->db->get("vehicals");

    	return $query;
       
     }

     public function fetch_booking()
    {
    	$query = $this->db->get("ongoing_booking");

    	return $query;
       
     }
     public function fetch_todaybooking()
    {
        $date = date('Y-m-d');
        $this->db->where("booking_date",$date);
        $query = $this->db->get("ongoing_booking");
        return $query;

        
       
     }
     public function fetch_tomorrowbooking()
    {
       $date2=date("Y-m-d", time() + 86400);
        $this->db->where("booking_date",$date2);
        $query = $this->db->get("ongoing_booking");
        return $query;

        
       
     }
      public function fetch_hbooking()
    {
        $query = $this->db->get("booking_history");

        return $query;
       
     }
      public function fetch_tour()
    {
        $query = $this->db->get("ongoing_tour");

        return $query;
       
     }
     public function tourhistory()
    {
        $query = $this->db->get("history_tour");

        return $query;
       
     }

     public function updateowner($id){
        
        $this->db->where("OID",$id);
        $query = $this->db->get("owner");
        return $query;

     }
     public function updatevehical($id){
        
        $this->db->where("VID",$id);
        $query = $this->db->get("vehicals");
        return $query;

     }
     public function updatetour2($id){
        
        $this->db->where("TID",$id);
        $query = $this->db->get("ongoing_tour");
        return $query;

     }

     public function updatebooking($id){
        
        $this->db->where("BID",$id);
        $query = $this->db->get("ongoing_booking");
        return $query;

     }
     public function updatetour($id){
        
        $this->db->where("BID",$id);
        $query = $this->db->get("ongoing_tour");
        return $query;

     }

     public function deletebooking($id){
        
        $this->db->where("BID",$id);
        $this->db->delete("booking_history");
        

     }
     

}