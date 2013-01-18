<?php 
class JsonViewer{
	private $module;
	private $userid;
	private $data;
	private $idParamName='opensocial_viewer_id';
	#private $root="http://localhost/main.php/";
	private $root="http://dev401.sp-buster.klab.org/main.php/";
	private $host="dev401.sp-buster.klab.org";
	
	function setModule($module){$this->module=$module;}	
	function setUserId($userid){$this->userid=$userid;}	
	function setData($data){$this->data=$data;}	


	function getPath(){return $this->path;}	
	function getUserId(){return $this->userid;}	
	function getData(){return $this->data;}	

	
	function createTable(){
	
		$url=$this->createURL();
		$temp_var=$this->callCURL($url);
		$this->data= $this->parseJson($temp_var);
		return $this->jsonToHtml($this->data);
		 
	}
	
	
	function createURL(){
		if(isset($this->module)){
			$userid=isset($this->userid)?$this->userid:"";
			if(!empty($userid)){
				return $this->root."/".$this->module."?".$this->idParamName."=".$userid;
			}else{
				return $this->root."/".$this->module;
			}
		}
		
	}
	function callCURL($url){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');			
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');			
			curl_setopt ($curl, CURLOPT_URL, $url);
           	curl_setopt($curl, CURLOPT_HEADER, FALSE);
			$headers = array("Host: ".$this->host);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
 			$var=curl_exec ($curl);
			curl_close ($curl);
			return $var;
		}



	 
	function parseJson($json){
		return json_decode($json, true);
	}
	
	
	
	function jsonToHtml($arr_json,$child=0){
		$table="";
		$bgcolor="";
		$width="100%";
		$style="";
		$ctr=0;
		
		if(!empty($arr_json)){
			if($child==0){
					#$bgcolor="#99CCFF";
			}else{
				$width="100%";
				$style="style='border-bottom:none; border-right:none; border-left:none; border-top:none;'";
			}

			
			$table="<table border='1' width='".$width."' cellpadding='0' cellspacing='0'";
			$table.=$style;
			$table.=">";
			foreach($arr_json  as $key => $value){
			
				$table.="<tr bgcolor='";
				if($child==0)$table.=$this->trColor($ctr);
				$table.="'>
							<td  > &nbsp;&nbsp;".$key." </td>
							<td valign='middle'>";
					if(is_array($value)){
						$table.= $this->jsonToHtml($value,1);
					}elseif(preg_match("/image/i", $value)){
						$table.=$this->imageBuilder($value);
					}else{
						$table.="&nbsp;&nbsp;".$value;
					} 
				$table.=" </td>
						</tr>";
				$ctr++;
			}//foreach
			$table.="</table>";
		}else{
			$table.="empty array";
		}//if
		return $table; 
	}//function
	
	
	function imageBuilder($image){
		$img="";
		if(!empty($image)){
			$src="http://".$this->host.$image."?".$this->idParamName."=".$this->userid;
			$img.="<img src='".$src."'>";
		
		}
		return $img; 
	}


function filterParameters($data) {


	// Check if the parameter is an array
	if(is_array($data)) {
	$data = array_map('trim', $data);
	if (get_magic_quotes_gpc()) {		
		$data = array_map('stripslashes', $data); 
	}

		// Loop through the initial dimension
		foreach($data as $key => $value) {
			// Check if any nodes are arrays themselves
			if(is_array($data[$key])){
				// If they are, let the function call itself over that particular node
				$data[$key] = filterParameters($data[$key]);				
			}	
			// Check if the nodes are strings
			if(is_string($data[$key])){
				// If they are, perform the real escape function over the selected node				
				$data[$key] = mysql_real_escape_string($data[$key]);

			}	
		}            
	}
	// Check if the parameter is a string
	if(is_string($data)){
		// If it is, perform a  mysql_real_escape_string on the parameter
		$data = mysql_real_escape_string($data);
	}
	// Return the filtered result
	return $data;

}
   function trColor($ctr){
   	if($ctr%2){ return '#D8D8D8';}
	else{return '#FFFFFF';}	
   }

}//class

?>