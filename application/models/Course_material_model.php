<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Course_material_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get course_material by id
     */
    function get_course_material($id)
    {
        return $this->db->get_where('course_material',array('id'=>$id))->row_array();
    }
    /*
     * Get course_material by id
     */
    function get_course_material_cid($id)
    {
        return $this->db->get_where('course_material',array('course_id'=>$id))->row_array();
    }
    
    /*
     * Get all course_material count
     */
    function get_all_course_material_count()
    {
        $this->db->from('course_material');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all course_material
     */
    function get_all_course_material($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('course_material')->result_array();
    }
        
    /*
     * function to add new course_material
     */
    function add_course_material($params)
    {
        $this->db->insert('course_material',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update course_material
     */
    function update_course_material($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('course_material',$params);
    }
    
    /*
     * function to delete course_material
     */
    function delete_course_material($id)
    {
        return $this->db->delete('course_material',array('id'=>$id));
    }
}
