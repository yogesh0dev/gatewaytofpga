<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Help_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get help by id
     */
    function get_help($id)
    {
        return $this->db->get_where('help',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all help count
     */
    function get_all_help_count()
    {
        $this->db->from('help');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all help
     */
    function get_all_help($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('help')->result_array();
    }
    /*
     * Get all help get_all_help_list
     */
    function get_all_help_list($id)
    {
        $this->db->where('studentid',$id);
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        return $this->db->get('help')->result_array();
    }
     function get_all_help_tlist($id)
    {
        $this->db->where('trainerid',$id);
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        return $this->db->get('help')->result_array();
    }
        
    /*
     * function to add new help
     */
    function add_help($params)
    {
        $this->db->insert('help',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update help
     */
    function update_help($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('help',$params);
    }
    
    /*
     * function to delete help
     */
    function delete_help($id)
    {
        return $this->db->delete('help',array('id'=>$id));
    }
}
