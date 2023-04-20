<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get users by id
     */
    function get_users($id)
    {
        return $this->db->get_where('users',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all users count
     */
    function get_all_users_count()
    {
        $this->db->from('users');
        return $this->db->count_all_results();
    }
      /*
     * Get all users count
     */
    function get_all_userss()
    {
		$this->db->where('role','student');
        $this->db->from('users');
        return $this->db->count_all_results();
    }
      /*
     * Get all users count
     */
    function get_all_userst()
    {
		$this->db->where('role','teacher');
        $this->db->from('users');
        return $this->db->count_all_results();
    }
       /*
     * Get all users count
     */
    function get_all_usersts()
    {
		$this->db->select('*');
		$this->db->where('created_on BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW()');
		return $result = $this->db->count_all_results('users');

    }
       /*
     * Get all users count
     */
    function get_batchInfo_og()
    {
		$this->db->where('bdate <=',date('Y-m-d'));
		return $result = $this->db->count_all_results('course_schedule');

    }
      function get_batchInfo_buc()
    { 
		$this->db->where('bdate >=',date('Y-m-d'));
		
		return $result = $this->db->count_all_results('course_schedule');

    }
        
    /*
     * Get all users
     */
    function get_all_users($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('users')->result_array();
    }
	
	   
    /*
     * Get all users
     */
    function get_all_usersp()
    {
		$this->db->order_by('id', 'desc');
        return $this->db->get('users')->result_array();
    }
	
	
     /*
     * Get all users
     */
    function user_info()
    {
        $this->db->select('id, email ,first_name, last_name, simg, role,phone');
        $this->db->where('role!=','admin');
        
        return $this->db->get('users')->result_array();
       
    }
     

	 
    /*
     * function to add new users
     */
    function add_users($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update users
     */
    function update_users($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete users
     */
    function delete_users($id)
    {
        return $this->db->delete('users',array('id'=>$id));
    }
}
