<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Tests_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tests by id
     */
    function get_tests($id)
    {
        return $this->db->get_where('tests',array('id'=>$id))->row_array();
    }
  
     function get_tests_bid($id)
    {
		$this->db->where('batch_id',$id);
		$this->db->order_by('id', 'desc');
        return $this->db->get('tests')->row_array();
    }
    /*
     * Get all tests count
     */
    function get_all_tests_count()
    {
        $this->db->from('tests');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tests
     */
    function get_all_tests($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tests')->result_array();
    }
        
    /*
     * function to add new tests
     */
    function add_tests($params)
    {
        $this->db->insert('tests',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tests
     */
    function update_tests($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tests',$params);
    }
    
    /*
     * function to delete tests
     */
    function delete_tests($id)
    {
        return $this->db->delete('tests',array('id'=>$id));
    }
}