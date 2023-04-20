<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Course_info_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get course_info by id
     */
    function get_course_info($id)
    {
        return $this->db->get_where('course_info',array('id'=>$id))->row_array();
		// echo $this->db->last_query();
    }
    /*
     * Get course_info by id
     */
    function get_course_info_cid($id)
    {
        return $this->db->get_where('course_info',array('course_id'=>$id))->row_array();
		// echo $this->db->last_query();
    }
    
    /*
     * Get all course_info count
     */
    function get_all_course_info_count()
    {
        $this->db->from('course_info');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all course_info
     */
    function get_all_course_info($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('course_info')->result_array();
    }
        
    /*
     * function to add new course_info
     */
    function add_course_info($params)
    {
        $this->db->insert('course_info',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update course_info
     */
    function update_course_info($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('course_info',$params);
    }
    
    /*
     * function to delete course_info
     */
    function delete_course_info($id)
    {
        return $this->db->delete('course_info',array('id'=>$id));
    }
}
