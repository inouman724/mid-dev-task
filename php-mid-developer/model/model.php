<?php

class calculator
{
    // object properties
    private $cost_per_mile;
    private $extra_person = 15;
    private $two_person_job = false;
    private $drop_offs = [];
    private $total_distance = 0;
    private $total_price = 0;

    
  
    function __construct()
    {
        
    }

    public function calculateCost($cost_per_mile,$drop_offs,$two_person_job)
    {
        $this->cost_per_mile = (double) $cost_per_mile;
        $this->drop_offs = $drop_offs;
        $this->two_person_job = $two_person_job ;
        
        $response = array();

        if($this->two_person_job === 'true')
        {
            $response['extra_person'] =(double)  $this->extra_person;
           
        }

        $response['cost_per_mile'] = $this->cost_per_mile;
        $response['drop_offs'] = count($this->drop_offs);
        $response['cost_per_mile'] = $this->cost_per_mile;


        foreach($this->drop_offs as $single_one)
        {
            $this->total_distance += $single_one;
            $this->total_price += $single_one * $this->cost_per_mile;
           
            if($this->two_person_job==='true')
            {
                $this->total_price += $this->extra_person;
            }
           
        }
        
        $response['total_price'] = $this->total_price;
        $response['total_distance'] = $this->total_distance;

    
        return $response;

    }
}

