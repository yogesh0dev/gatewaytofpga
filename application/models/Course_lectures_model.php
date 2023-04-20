<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Course_lectures_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get course_lectures by id
     */
    function get_course_lectures($id)
    {
        return $this->db->get_where('course_lectures',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all course_lectures count
     */
    function get_all_course_lectures_count()
    {
        $this->db->from('course_lectures');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all course_lectures
     */
    function get_all_course_lectures($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('course_lectures')->result_array();
    }
        
    /*
     * function to add new course_lectures
     */
    function add_course_lectures($params)
    {
        $this->db->insert('course_lectures',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update course_lectures
     */
    function update_course_lectures($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('course_lectures',$params);
    }
    
    /*
     * function to delete course_lectures
     */
    function delete_course_lectures($id)
    {
        return $this->db->delete('course_lectures',array('id'=>$id));
    }
}
