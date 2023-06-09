<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Price_manager_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get price_manager by id
     */
    function get_price_manager($id)
    {
        return $this->db->get_where('price_manager',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all price_manager count
     */
    function get_all_price_manager_count()
    {
        $this->db->from('price_manager');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all price_manager
     */
    function get_all_price_manager($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('price_manager')->result_array();
    }
        
    /*
     * function to add new price_manager
     */
    function add_price_manager($params)
    {
        $this->db->insert('price_manager',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update price_manager
     */
    function update_price_manager($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('price_manager',$params);
    }
    
    /*
     * function to delete price_manager
     */
    function delete_price_manager($id)
    {
        return $this->db->delete('price_manager',array('id'=>$id));
    }
}
