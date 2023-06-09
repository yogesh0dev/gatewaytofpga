<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Career_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get career by id
     */
    function get_career($id)
    {
        return $this->db->get_where('career',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all career count
     */
    function get_all_career_count()
    {
        $this->db->from('career');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all career
     */
    function get_all_career($params = array())
    {
        if($_SESSION['role']!='admin'){$this->db->where('status','Y');}
	$this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('career')->result_array();
    }
        
    /*
     * function to add new career
     */
    function add_career($params)
    {
        $this->db->insert('career',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update career
     */
    function update_career($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('career',$params);
    }
    
    /*
     * function to delete career
     */
    function delete_career($id)
    {
        return $this->db->delete('career',array('id'=>$id));
    }
}
