<?php
class ModelCatalogAttribute extends Model {
	public function addAttribute($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "attribute SET attribute_group_id = '" . (int)$data['attribute_group_id'] . "', sort_order = '" . (int)$data['sort_order'] . "'");

		$attribute_id = $this->db->getLastId();


			if ($this->config->get('module_atpresets_installed')==1) {
				$this->load->model('extension/atpresets/atpresets');
				if (isset($data['presets'])) {
					foreach ($data['presets'] as $preset) {
						$preset['attribute_id'] = $attribute_id;
						if ($preset['preset_id']!=0) 
							if (isset($preset['text'])) 
								$this->model_extension_atpresets_atpresets->editPreset($preset['preset_id'],$preset);	
							else
								$this->model_extension_atpresets_atpresets->deletePreset($preset['preset_id']);	
						else if (isset($preset['text'])) 
							$this->model_extension_atpresets_atpresets->addPreset($preset);
					}
				}
			}
				
		foreach ($data['attribute_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "attribute_description SET attribute_id = '" . (int)$attribute_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "'");
		}

		return $attribute_id;
	}

	public function editAttribute($attribute_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "attribute SET attribute_group_id = '" . (int)$data['attribute_group_id'] . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE attribute_id = '" . (int)$attribute_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "attribute_description WHERE attribute_id = '" . (int)$attribute_id . "'");


			if ($this->config->get('module_atpresets_installed')==1) {
				$this->load->model('extension/atpresets/atpresets');
				if (isset($data['presets'])) {
					foreach ($data['presets'] as $preset) {
						$preset['attribute_id'] = $attribute_id;
						if ($preset['preset_id']!=0) 
							if (isset($preset['text'])) 
								$this->model_extension_atpresets_atpresets->editPreset($preset['preset_id'],$preset);	
							else
								$this->model_extension_atpresets_atpresets->deletePreset($preset['preset_id']);	
						else if (isset($preset['text'])) 
							$this->model_extension_atpresets_atpresets->addPreset($preset);
					}
				}
			}
				
		foreach ($data['attribute_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "attribute_description SET attribute_id = '" . (int)$attribute_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "'");
		}
	}

	public function deleteAttribute($attribute_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "attribute WHERE attribute_id = '" . (int)$attribute_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "attribute_description WHERE attribute_id = '" . (int)$attribute_id . "'");

		if ($this->config->get('module_atpresets_installed')==1) {
			$sql = "SELECT preset_id FROM " . DB_PREFIX . "attribute_presets WHERE attribute_id = '". (int)$attribute_id ."'";			
			$query = $this->db->query($sql);		
			
			foreach ($query->rows as $preset) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "attribute_presets WHERE preset_id = '" . (int)$preset['preset_id'] . "'");
				$this->db->query("DELETE FROM " . DB_PREFIX . "attribute_presets_description WHERE preset_id = '" . (int)$preset['preset_id'] . "'");				
				$this->db->query("UPDATE " . DB_PREFIX . "product_attribute SET preset_id = 0 WHERE preset_id = '" . (int)$preset['preset_id'] . "'");
			}
		}
				
	}

	public function getAttribute($attribute_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute a LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE a.attribute_id = '" . (int)$attribute_id . "' AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getAttributes($data = array()) {
		$sql = "SELECT *, (SELECT agd.name FROM " . DB_PREFIX . "attribute_group_description agd WHERE agd.attribute_group_id = a.attribute_group_id AND agd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS attribute_group FROM " . DB_PREFIX . "attribute a LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND ad.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_attribute_group_id'])) {
			$sql .= " AND a.attribute_group_id = '" . $this->db->escape($data['filter_attribute_group_id']) . "'";
		}

		$sort_data = array(
			'ad.name',
			'attribute_group',
			'a.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY attribute_group, ad.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getAttributeDescriptions($attribute_id) {
		$attribute_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_description WHERE attribute_id = '" . (int)$attribute_id . "'");

		foreach ($query->rows as $result) {
			$attribute_data[$result['language_id']] = array('name' => $result['name']);
		}

		return $attribute_data;
	}

	public function getTotalAttributes() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "attribute");

		return $query->row['total'];
	}

	public function getTotalAttributesByAttributeGroupId($attribute_group_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "attribute WHERE attribute_group_id = '" . (int)$attribute_group_id . "'");

		return $query->row['total'];
	}
}
