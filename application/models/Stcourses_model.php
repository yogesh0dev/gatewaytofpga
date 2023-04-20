<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Stcourses_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get stcourses by id
     */
    function get_stcourses($id)
    {
        return $this->db->get_where('stcourses',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all stcourses count
     */
    function get_all_stcourses_count()
    {
        $this->db->from('stcourses');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all stcourses
     */
    function get_all_stcourses($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('stcourses')->result_array();
    }
    /*
     * Get all stcourses
     */
    function get_rand_list($vals)
    {
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit($vals,'0');
        return $this->db->get('stcourses')->result_array();
    }
        
    /*
     * function to add new stcourses
     */
    function add_stcourses($params)
    {
        $this->db->insert('stcourses',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update stcourses
     */
    function update_stcourses($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('stcourses',$params);
    }
    
    /*
     * function to delete stcourses
     */
    function delete_stcourses($id)
    {
        return $this->db->delete('stcourses',array('id'=>$id));
    }
}
