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

	public function set_blog()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		// $same_slug = $this->db->select('slug')
		// 	->where('slug', $slug)
		// 	->count_all_results('blog');

		$array = explode(PHP_EOL, trim($this->input->post('text')));
		$paragraphs = array();
		foreach ($array as $paragraph) {
			$paragraph = rtrim(preg_replace('/\s+/', ' ', $paragraph));
			if (empty($paragraph)) {
				continue;
			}
			array_push($paragraphs, rtrim($paragraph));
		}
		$paragraphs = implode(PHP_EOL, $paragraphs);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $paragraphs
		);

		return $this->db->insert('blog', $data);
	}

	public function delete_blog($slug)
	{
		return $this->db->delete('blog', array('slug' => $slug));
	}
}
