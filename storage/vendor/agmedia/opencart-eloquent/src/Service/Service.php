<?php


namespace Agmedia\Service;


use Agmedia\Helpers\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class Service
{
    
    /**
     * @var Client
     */
    protected $service;
    
    
    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->service = new Client();
    }
    
    
    /**
     * @return Collection
     */
    public function getProducts()
    {
        $response = new Collection(
            $this->service->get(agconf('erp.base_url') . 'sif_roba/getitems' . agconf('erp.url_sufix'))->json()
        );
        
        return $response->whereNotIn('IDODJEL', ['US', 'PLT', 'REP', 'ROB'])->groupBy('IDODJEL');
    }
    
    
    /**
     * @param $odjel
     *
     * @return Collection
     */
    public function getOptions($odjel)
    {
        return new Collection(
            $this->service->get(agconf('erp.base_url') . 'sif_roba/getodjel/' . $odjel . agconf('erp.url_sufix'))->json()
        );
    }
    
    
    /**
     * @param $sku
     *
     * @return Collection
     */
    public function getTraslations($sku)
    {
        $response  = [];
        $languages = ['FRA'];
        
        foreach ($languages as $language) {
            $url = agconf('erp.base_url') . 'sif_roba/getPrijevod/' . $language . '/' . $sku . agconf('erp.url_sufix');
            
            $collection = new Collection(
                $this->service->get($url)->json()
            );
           
            $response[$language] = $collection->first();
        }
    
        Log::write('getTraslations($sku)', 'languages');
        Log::write($response, 'languages');
        
        return new Collection($response);
    }
    
    
    /**
     * @param $odjel
     *
     * @return Collection
     */
    public function getImages($odjel)
    {
        return new Collection(
            $this->service->get(agconf('erp.base_url') . 'sif_roba/getOdjelSlike/' . $odjel . agconf('erp.url_sufix'))->json()
        );
    }
    
    
    /**
     * @param $request
     *
     * @return Collection
     */
    public function sendOrder($request, $target = false)
    {
        $path = $target ? '&idfirma=' . $target : '';
        
        if ($target == 2 || $target == 3) {
            $request['narudzba']['VALUTA'] = 978;
            $request['narudzba']['TECAJ'] = Hnb::getCurrencyValue();
        }
    
        \Agmedia\Helpers\Log::info($path, 'order_' . $request['narudzba']['CMS_ID']);
        \Agmedia\Helpers\Log::info($request, 'order_' . $request['narudzba']['CMS_ID']);
        
        $res = $this->service->post(agconf('erp.base_url') . 'narudzba/create' . $path . agconf('erp.url_sufix'), ['body' => json_encode($request)])->json();
    
        \Agmedia\Helpers\Log::info($res, 'order_' . $request['narudzba']['CMS_ID']);
        
        return new Collection(
            $res
        );
    }
}