<?php
class ControllerExtensionModuleAdvReportsSales extends Controller {

	// Template Switcher by JNeuhoff (https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=31589)
	// Copyright (c) 2015-2017 by MHCCORP.COM
	// GNU General Public License Version 3 (https://www.gnu.org/licenses/gpl.html)
	private $error = array(); 
	protected $template_engines = array();

	public function __construct($registry) {
		// Call parent constructor
		parent::__construct($registry);

		if (!$this->config->get('module_adv_reports_sales_status')) {
			return;
		}
		
		// Find all available template engines
		$template_engines = array();
		$files = glob(DIR_SYSTEM . 'library/template/*.php');
		if ($files) {
			foreach ($files as $file) {
				if (is_file($file)) {
					$template_engine = basename($file,'.php');
					$template_engines[] = $template_engine;
				}
			}
		}
		$this->template_engines = $template_engines;
	}
	
	public function index() {  		

$data['adv_current_version'] = '4.4';
            
		$this->load->language('extension/module/adv_reports_sales');
		
		$this->document->setTitle($this->language->get('heading_title_main'));

		$data['adv_text_ext_name'] = $this->language->get('adv_text_ext_name');
		$data['adv_ext_name'] = $this->language->get('adv_ext_name');
		$data['adv_ext_short_name'] = 'adv_sales';
		$data['adv_text_instal_version'] = $this->language->get('adv_text_instal_version');
		$data['adv_text_latest_version'] = $this->language->get('adv_text_latest_version');
		$data['adv_ext_version'] = $this->language->get('adv_ext_version');
		$data['adv_ext_type'] = $this->language->get('adv_ext_type');
		$data['adv_text_ext_compatibility'] = $this->language->get('adv_text_ext_compatibility');
		$data['adv_ext_compatibility'] = $this->language->get('adv_ext_compatibility');
		$data['adv_text_ext_url'] = $this->language->get('adv_text_ext_url');
		$data['adv_ext_url'] = 'https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=3803';
		$data['adv_all_ext_url'] = 'https://www.opencart.com/index.php?route=marketplace/extension&filter_member=cmerry';
		$data['adv_help_url'] = 'http://www.opencartreports.com/documentation/so/index.html#support';
		$data['adv_legal_notice_url'] = 'http://www.opencartreports.com/documentation/so/index.html#terms';		
		$data['adv_text_reg_info'] = $this->language->get('adv_text_reg_info');
		$data['adv_text_reg_status'] = $this->language->get('adv_text_reg_status');
		$data['adv_text_ext_support'] = $this->language->get('adv_text_ext_support');
		$data['adv_ext_support'] = $this->language->get('adv_ext_support');
		$data['adv_ext_subject'] = sprintf($this->language->get('adv_ext_subject'), $this->language->get('adv_ext_name'));
		$data['adv_text_ext_legal'] = $this->language->get('adv_text_ext_legal');	
		$data['adv_text_copyright'] = $this->language->get('adv_text_copyright');
		$data['auth'] = TRUE;
		$data['ldata'] = FALSE;		
		$data['servers'] = '';	
            

		$data['heading_title_main'] = $this->language->get('heading_title_main');
		$data['text_edit'] = $this->language->get('text_edit');
			
		$data['tab_about'] = $this->language->get('tab_about');
		
		$data['text_help_request'] = $this->language->get('text_help_request');
		$data['text_asking_help'] = $this->language->get('text_asking_help');		
		$data['text_terms'] = $this->language->get('text_terms');		
		
		$data['button_documentation'] = $this->language->get('button_documentation');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['button_cancel'] = $this->language->get('button_cancel');	
				
  		$data['breadcrumbs'] = array();
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)

   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_extension'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title_main'),
			'href'      => $this->url->link('extension/module/adv_reports_sales', 'user_token=' . $this->session->data['user_token'], true)
   		);
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
				
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');


		$adv_check = curl_init();
 		     // Set URL to download
		curl_setopt($adv_check, CURLOPT_URL,"http://opencartreports.com/version/adv_so_version.xml");
 		    // Include header in result? (0 = yes, 1 = no)
		curl_setopt($adv_check, CURLOPT_HEADER, 0);
     		// Should cURL return or print out the data? (true = return, false = print)
		curl_setopt($adv_check, CURLOPT_RETURNTRANSFER, true);
 		    // Timeout in seconds
		curl_setopt($adv_check, CURLOPT_TIMEOUT, 10);
 		    // Download the given URL, and return output
		$adv_output = curl_exec($adv_check);
    		// Close the cURL resource, and free system resources
 		curl_close($adv_check);
		$adv_analyse = simplexml_load_string($adv_output,null);
		if ($adv_output != FALSE) {				
		$data['version'] = $adv_analyse->children()->version;
		$data['whats_new'] = html_entity_decode(str_replace("@@@","<br>",$adv_analyse->children()->whats_new), ENT_QUOTES, "UTF-8");
		}
            
		$this->response->setOutput($this->load->view('extension/module/adv_reports_sales', $data));
	}
	
	public function install() {	
		$this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '0', `code` = 'module_adv_reports_sales', `key` = 'module_adv_reports_sales_status', `value` = '1'");

		// Add indexes
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "order_product` WHERE Key_name = 'product_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD INDEX (product_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "order_option` WHERE Key_name = 'order_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "order_option` ADD INDEX (order_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "order_history` WHERE Key_name = 'order_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "order_history` ADD INDEX (order_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "order` WHERE Key_name = 'customer_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD INDEX (customer_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "return` WHERE Key_name = 'order_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "return` ADD INDEX (order_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "return` WHERE Key_name = 'product_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "return` ADD INDEX (product_id);");
			}
		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "customer_reward` WHERE Key_name = 'order_id';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_reward` ADD INDEX (order_id);");
			}

		$query = $this->db->query("SHOW KEYS FROM `" . DB_PREFIX . "customer_activity` WHERE Key_name != 'PRIMARY';");
			if (!$query->rows) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_activity` ADD INDEX (customer_id);");
			}
			
		$this->load->model('user/user_group');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/report/adv_sales');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/report/adv_sales');	
		
		// add event handlers
		$this->load->model('setting/event');
		$code = 'module_adv_reports_sales';
		$app = 'admin/';
		$trigger = 'view/*/before';
		$route = 'extension/module/adv_reports_sales/override';
		$this->model_setting_event->addEvent( $code, $app.$trigger, $route, 1, 0 );
		$trigger = 'view/design/layout_form/before';
		$route = 'extension/module/adv_reports_sales/eventViewDesignLayoutFormBefore';
		$this->model_setting_event->addEvent( $code, $app.$trigger, $route, 1, 0 );		
	}
	
	public function uninstall() {
		// remove event handlers
		$this->load->model('setting/event');
		$code = 'module_adv_reports_sales';
		$this->model_setting_event->deleteEventByCode( $code );
	}


	// event handler for admin/view/*/before 
	public function override(&$route, &$data, &$template) {
		if (!$this->config->get('module_adv_reports_sales_status')) {
			return null;
		}

		// Find the correct template_engine and template_directory for a later rendering
		foreach ($this->template_engines as $template_engine) {
			$ext = ($template_engine == 'template') ? '.tpl' : '.'.$template_engine;
			if (is_file(DIR_TEMPLATE.$route.$ext)) {
				$this->config->set( 'template_engine', $template_engine );
				$this->config->set( 'template_directory', '' );
				return null;
			} 
		}

		trigger_error("Cannot find template file for route '$route'");
		exit;
	}


	// event handler for admin/view/*/before
	public function render(&$route, &$data, &$template) {
		if (!$this->config->get('module_adv_reports_sales_status')) {
			return null;
		}

		// If there is a template buffer from previous view/*/before events then we render
		if ($template) {
			$template_engine = $this->config->get('template_engine');

			if ($template_engine == 'twig') {
				// include and register Twig auto-loader
				include_once(DIR_SYSTEM . 'library/template/Twig/Autoloader.php');
				
				Twig_Autoloader::register();
						
				// specify where to look for templates
				$loader = new \Twig_Loader_Filesystem(DIR_TEMPLATE);		
				
				$config = array('autoescape' => false);
				
				if ($this->config->get('template_cache')) {
					$config['cache'] = DIR_CACHE;
				}
				
				// initialize Twig environment
				$twig = new \Twig_Environment($loader, $config);
					
				return $twig->createTemplate($template)->render($data);
			}

			// render using other template engines, such as PHP
			$template = new Template($this->registry->get('config')->get('template_engine'));
			foreach ($data as $key => $value) {
				$template->set($key, $value);
			}
			return $template->render($this->registry->get('config')->get('template_directory') . $route);		
		}
	
	}
	
	// event handler for admin/view/design/layout_form/before
	public function eventViewDesignLayoutFormBefore( &$route, &$data, &$template ) {
		foreach ($data['extensions'] as $key=>$extension) {
			if ($extension['code'] == 'module_adv_reports_sales') {
				unset($data['extensions'][$key]);
			}
		}
		return null;
	}
}