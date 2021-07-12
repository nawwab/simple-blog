<?php
class Blog_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_blog($slug = FALSE)
	{
		if ($slug === FALSE) {
			$query = $this->db->get('blog');
			return $query->result_array();
		}

		$query = $this->db->get_where('blog', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_blog_by_id($id)
	{
		$query = $this->db->get_where('blog', array('id' => $id));
		return $query->row_array();
	}

	public function set_blog()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$same_slug_count = $this->db->select('slug')
			->where('slug', $slug)
			->count_all_results('blog');
		
		if ($same_slug_count > 0) {
			$slug = $slug . "-" . ($same_slug_count + 1);
		}

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('blog', $data);
	}

	public function update_blog($id) {
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$same_slug_count = $this->db->select('slug')
			->where('slug', $slug)
			->count_all_results('blog');

		if ($same_slug_count > 0) {
			$slug = $slug . "-" . ($same_slug_count + 1);
		}

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->where('id', $id)->update('blog', $data);
	}

	public function delete_blog($slug)
	{
		return $this->db->delete('blog', array('slug' => $slug));
	}
}
