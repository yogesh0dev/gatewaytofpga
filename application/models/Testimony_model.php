<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Testimony_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get testimony by id
     */
    function get_testimony($id)
    {
        return $this->db->get_where('testimony',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all testimony count
     */
    function get_all_testimony_count()
    {
        $this->db->from('testimony');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all testimony
     */
    function get_all_testimony($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('testimony')->result_array();
    }
	function get_all_testimony_counts($cid)
    {
        $this->db->select('sum(star) as star');
        $this->db->where('course_id',$cid);
        return $this->db->get('testimony')->row_array();       
    }
	
	/*
     * Get all testimony
     */
    function get_all_testimony_id($crid)
    {
        $this->db->where('course_id', $crid);
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
			$this->db->order_by('id', 'desc');
        return $this->db->get('testimony')->result_array();
    }
	
	
     /*
     * Get all Testimony random
     */
    function get_rand_list($vals)
    {
		$this->db->where('status','Y');
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit($vals,'0');
        return $this->db->get('testimony')->result_array();
    }   
    /*
     * function to add new testimony
     */
    function add_testimony($params)
    {
        $this->db->insert('testimony',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update testimony
     */
    function update_testimony($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('testimony',$params);
    }
    
    /*
     * function to delete testimony
     */
    function delete_testimony($id)
    {
        return $this->db->delete('testimony',array('id'=>$id));
    }
}