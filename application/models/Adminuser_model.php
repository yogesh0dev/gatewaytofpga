<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Adminuser_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get adminuser by id
     */
    function get_adminuser($id)
    {
        return $this->db->get_where('adminuser',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all adminuser count
     */
    function get_all_adminuser_count()
    {
        $this->db->from('adminuser');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all adminuser
     */
    function get_all_adminuser($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('adminuser')->result_array();
    }
        
    /*
     * function to add new adminuser
     */
    function add_adminuser($params)
    {
        $this->db->insert('adminuser',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update adminuser
     */
    function update_adminuser($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('adminuser',$params);
    }
    
    /*
     * function to delete adminuser
     */
    function delete_adminuser($id)
    {
        return $this->db->delete('adminuser',array('id'=>$id));
    }
}
