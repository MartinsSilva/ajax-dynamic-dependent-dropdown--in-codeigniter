<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model
{

	public function getPost($categories)
	{
		$this->db->where('category', $categories);
		$query = $this->db->get('posts');

		foreach ($query->result() as $row) {
			$output = '<option value="'.$row->id.'" selected>'.$row->title.'</option>';
		}
		return $output;
	}

	public function getCategories()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}
}
