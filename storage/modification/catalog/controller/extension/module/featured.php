<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}


			$this->load->language('product/product_variant');
			$text_variant = '';
			$variants = array();
			
			$variant_setting = $this->config->get('product_variant_setting');
			if($this->config->get('product_variant_setting_status') && $variant_setting['catalog']){
				$variant_images = $this->config->get('product_variant_image'); 
				$variant_count = 0;
				$products = array();
				
				if($variant_setting['type'] == 'custom') {
					$variant_ids = $this->model_catalog_product->getProductVariant($product_info['product_id']);
					foreach($variant_ids as $variant_id) {
						$product = $this->model_catalog_product->getProduct($variant_id);
						if($product){
							$products[] = $product;
						}
					}
				} else {
					if(isset($product_info[$variant_setting['type']]) && !empty($product_info[$variant_setting['type']])){
						$filters = array(
							'filter_name' => $product_info[$variant_setting['type']]
						);
						$products = $this->model_catalog_product->getProducts($filters);
					}						
				}
				
				foreach($products as $product) {
					if($variant_setting['quantity'] == 0 && $product['quantity'] <= 0) {
						continue;
					}
					if($variant_setting['catalog'] == 2){
							
						if(isset($variant_images[$product['product_id']]) && !empty($variant_images[$product['product_id']])){
							$variant_image = $variant_images[$product['product_id']];
						} else {
							$variant_image = $product['image'];
						}
						
						$width = ($variant_setting['image_width']) ? $variant_setting['image_width'] : 30;
						$height = ($variant_setting['image_width']) ? $variant_setting['image_height'] : 30;
						
						$variants[$product['product_id']]['variant_image'] = $this->model_tool_image->resize($variant_image, $width, $height);
																						
				
						$variants[$product['product_id']]['name'] = $product['name'];
						$variants[$product['product_id']]['href'] = $this->url->link('product/product', 'product_id=' . $product['product_id']);
						
					} else {
						$variant_count++;
					}
				}
				
				unset($variants[$product_info['product_id']]);
				
				$variant_count--;
				if ($variant_count > 1) {
					$text_variant = sprintf($this->language->get('text_variantions'), $variant_count);
				} elseif ($variant_count == 1) {
					$text_variant = sprintf($this->language->get('text_variantion'), 1);
				}					
			}
			
					$data['products'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => $image,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,

			'text_variant'=> $text_variant,
			'variants'=> $variants,
			
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}