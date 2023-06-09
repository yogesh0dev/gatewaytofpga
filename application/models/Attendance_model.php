<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Attendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get attendance by id
     */
    function get_attendance($id)
    {
        return $this->db->get_where('attendance',array('id'=>$id))->row_array();
    }
	
	function get_attotal($id)
    {
		$this->db->select_sum('attendence');
		$this->db->where('batch',$id);
		$this->db->where('studentid',$_SESSION['id']);
		return $this->db->get('attendance')->result_array();
    }
	
	
    /*
     * Get attendance by id 
     */
    function get_attendanceid($id)
    {
        return $this->db->get_where('attendance',array('sbcid'=>$id))->row_array();
    }
    
    /*
     * Get all attendance count
     */
    function get_all_attendance_count()
    {
        $this->db->from('attendance');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all attendance
     */
    function get_all_attendance($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('attendance')->result_array();
    }
        
    /*
     * function to add new attendance
     */
    function add_attendance($params)
    {
		date_default_timezone_set("Asia/Kolkata");
        $this->db->insert('attendance',$params);
        return $this->db->insert_id();
		
    }
    
    /*
     * function to update attendance
     */
    function update_attendance($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('attendance',$params);
    }
    
    /*
     * function to delete attendance
     */
    function delete_attendance($id)
    {
        return $this->db->delete('attendance',array('id'=>$id));
    }
}
