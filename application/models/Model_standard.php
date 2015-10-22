<?php
/**
 * Created by PhpStorm.
 * User: kreken
 * Date: 29/9/15
 * Time: 10:53 PM
 */
/**
 * User Model
 *
 * @author Gaurav Dhiman.
 * @package Rnd
 *
 */
class Model_standard extends CI_Model
{
    /**
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getSections(){
        $sql = "SELECT sec_id,code,name,start_std,end_std FROM sections";
        $query = $this->db->query($sql);
        $data = $query->result_array();

        if(!empty($data))
            return $data;
        else
            return false;
    }

    function getStandards(){
        $sql = "SELECT std_id,std_name FROM standards";
        $query = $this->db->query($sql);
        $data = $query->result_array();

        if(!empty($data))
            return $data;
        else
            return false;
    }

    function getStreams($cond = null){
        $this->db->select('stream_id,std_code,stream_name');
        $this->db->from('streams');
        if($cond != null)
            $this->db->where($cond);

        $query = $this->db->get();
        $data = $query->result_array();
        if(!empty($data))
            return $data;
        else
            return false;
    }

    function getDivisions($cond = null){
        $this->db->select('div_id,stream_code,division_name');
        $this->db->from('divisions');
        if($cond != null)
            $this->db->where($cond);

        $query = $this->db->get();
        $data = $query->result_array();
        if(!empty($data))
            return $data;
        else
            return false;
    }

    function getStandardsBySections($sec){
        $sql = "SELECT std_id,std_name FROM standards WHERE section='$sec'";
        $query = $this->db->query($sql);
        $data = $query->result_array();

        if(!empty($data))
            return $data;
        else
            return false;
    }
}