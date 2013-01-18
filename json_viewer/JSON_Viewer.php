<?php 
class JsonViewer{

	private $path;
	private $userid;
	private $data;
	
	
	function setPath($path){$this->path=$path;}	
	function setUserId($userid){$this->userid=$userid;}	
	function setData($data){$this->data=$data;}	


	function getPath(){return $this->path;}	
	function getUserId(){return $this->userid;}	
	function getData(){return $this->data;}	

	
	function createTable(){
		$url=$this->createURL();
		$this->data=$this->callCURL($url);
		$this->data= $this->parseJson($this->data);
		return $this->jsonToHtml();
	}
	
	
	function createURL(){
		if(isset($this->url)){
			
			$userid=isset($this->userid)?$this->userid:"";
			if(!empty($userid)){
				return $this->url."=".$userid;
			}else{
				return $this->url;
			}
		}
	}
	
	

	function callCURL($url){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 			
			curl_setopt ($curl, CURLOPT_URL, $url);
           	curl_setopt($curl, CURLOPT_HEADER, FALSE);
 			$var=curl_exec ($curl);
			curl_close ($curl);
			return $var;
		}



	function parseJson($json){
		return json_decode($json, true);
	}
	
	function jsonToHtml(){
		
		$table="<table border='1'>";
		foreach($this->data  as $key => $value){
			$table.="<tr>
						<td>".$key." </td>
						<td>";
				if(is_array($value)){
					$table.= jsonToHtml($value);
				}else{
					$table.=$value;
				} 
			$table.=" </td>
					</tr>
			";
		
		}//foreach
		$table.="</table>";
		return $table; 
	}
	
	



function filterParameters($data) {

	$data = array_map('trim', $data);
	if (get_magic_quotes_gpc()) {		
		$data = array_map('stripslashes', $data); 
	}

	// Check if the parameter is an array
	if(is_array($data)) {
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


}//class

?>