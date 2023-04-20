<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Marks_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get marks by id
     */
    function get_marks($id)
    {
        return $this->db->get_where('marks',array('id'=>$id))->row_array();
    }
    /*
     * Get marks by id
     */
    function get_marksid($id)
    {
        return $this->db->get_where('marks',array('sbcid'=>$id))->row_array();
    }
    
	function get_amarks($id)
    {
        return $this->db->get_where('marks',array('batch'=>$id,'studentid'=>$_SESSION['id']))->row_array();
    }
    
	
    /*
     * Get all marks count
     */
    function get_all_marks_count()
    {
        $this->db->from('marks');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all marks
     */
    function get_all_marks($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('marks')->result_array();
    }
        
    /*
     * function to add new marks
     */
    function add_marks($params)
    {
		date_default_timezone_set("Asia/Kolkata");
        $this->db->insert('marks',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update marks
     */
    function update_marks($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('marks',$params);
    }
    
    /*
     * function to delete marks
     */
    function delete_marks($id)
    {
        return $this->db->delete('marks',array('id'=>$id));
    }
}
