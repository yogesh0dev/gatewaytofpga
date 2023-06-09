<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Transactions_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get transactions by id
     */
    function get_transactions($id)
    {
        return $this->db->get_where('transactions',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all transactions count
     */
    function get_all_transactions_count()
    {
        $this->db->from('transactions');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all transactions
     */
    function get_all_transactions($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('transactions')->result_array();
    }
    /*
     * Get all transactions
     */
    function get_rand_list($vals)
    {
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit($vals,'0');
        return $this->db->get('transactions')->result_array();
    }
        
    /*
     * function to add new transactions
     */
    function add_transactions($params)
    {
        $this->db->insert('transactions',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update transactions
     */
    function update_transactions($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('transactions',$params);
    }
    
    /*
     * function to delete transactions
     */
    function delete_transactions($id)
    {
        return $this->db->delete('transactions',array('id'=>$id));
    }
}
