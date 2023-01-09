<?php 
	if (require_once 'model/model.php')
    {
        $response = array();  

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			
		   if (isset($_POST['cost_per_mile']) && isset($_POST['drop_offs']) && isset($_POST['two_person_job']))
		   {
		  
				if(!is_array($_POST['drop_offs']))
				{
					$response['success']=false;
					$response['message']= "drop_offs should be array";
				}
				else
				{
					$calculator = new calculator();
					$calculate_cost = $calculator->calculateCost($_POST['cost_per_mile'],$_POST['drop_offs'],$_POST['two_person_job']);
	
					$response['success'] = true;
					$response['message'] = "Data Calculated";
					$response['data'] = $calculate_cost;
	
					
				}
					
				echo json_encode($response);
			}
			else
			{

				echo json_encode(array('success'=>false,'message'=>"provide all values"));
			}
		}
		else
		{
			echo json_encode(array('success'=>false,'message'=>"invalid method - use post method"));
		}

	}
	else 
	{
		echo json_encode(array('success'=>false,'message'=>"model class not found"));
	}


?>

	 