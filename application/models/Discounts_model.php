<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Discounts_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get discounts by id
     */
    function get_discounts($id)
    {
        return $this->db->get_where('discounts',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all discounts count
     */
    function get_all_discounts_count()
    {
        $this->db->from('discounts');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all discounts
     */
    function get_all_discounts($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('discounts')->result_array();
    }
        
    /*
     * function to add new discounts
     */
    function add_discounts($params)
    {
        $this->db->insert('discounts',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update discounts
     */
    function update_discounts($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('discounts',$params);
    }
    
    /*
     * function to delete discounts
     */
    function delete_discounts($id)
    {
        return $this->db->delete('discounts',array('id'=>$id));
    }
}
