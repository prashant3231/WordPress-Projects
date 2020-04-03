<?php
ini_set("allow_url_fopen", "On");
global $lin;
$lin=0;
include("Html2Text.php");

class KeywordDensity  {
// -------------------------------------------------------------------
// @params
// -------------------------------------------------------------------
    var $domain;              // Domain to check
// -------------------------------------------------------------------
// PRIVATE FUNCTIONS
// -------------------------------------------------------------------
    // -------------------------------------------------------------------
    // Private Function cURL
    // -------------------------------------------------------------------
    private function cURL(){
      // -------------------------------------------------------------------
      // Save result page to string using curl
      // -------------------------------------------------------------------
      /* $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$this->domain);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	  curl_setopt( $ch, CURLOPT_AUTOREFERER, true );

      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
     echo  $str = curl_exec($ch);  */
	  $str = file_get_contents($this->domain);
      return $str;   
    } // End of private function cURL
    // -------------------------------------------------------------------
    // Private Function to return result page as string
    // -------------------------------------------------------------------
	private function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
    private function plainText(){
      // -------------------------------------------------------------------
      // External classes
      // -------------------------------------------------------------------
//   require_once('ext/class.html2text.inc');
      // -------------------------------------------------------------------
      // Save google result page to string using curl
      // -------------------------------------------------------------------
      $str = $this->cURL();
   
	  $str=preg_replace('#<script(.*?)>(.*?)</script>#is', '', $str);
	  $str=preg_replace('#<style(.*?)>(.*?)</style>#is', '', $str);
   	 

    //$str=$this->clean($str);
      // -------------------------------------------------------------------
      // Extract the plain text
      // -------------------------------------------------------------------
      

      $extraction =new Html2Text($str, true);
      $extraction->set_base_url($this->domain);
      // -------------------------------------------------------------------
      // Return string
      // -------------------------------------------------------------------
      
      return strtolower($extraction->get_text());  
    } // End of private function plainText
    // -------------------------------------------------------------------
    // Private Function to clean out the plain text
    // -------------------------------------------------------------------
    private function trim_replace($string) {
      $string = trim($string);
      return (string)str_replace(array("\r", "\r\n", "\n"), '', $string);
    }
    // Funtion to extract the single keywords and keyword combinations.
	// This function outputs an array
	private function keywordSorting($keywordsArray, $wordCount){
	
	
		$keywordsSorted0 = ''; // 1 word match 
		$keywordsSorted1 = ''; // 2 word phrase match 
		$keywordsSorted2 = ''; // 3 word phrase match 
		$keywordsSorted3 = ''; // 4 word phrase match 
			
		for ($i = 0; $i < count($keywordsArray); $i++){
			// 1 word phrase match 
			if ($i+0 < $wordCount){
				$keywordsSorted0 .= $keywordsArray[$i].',';			
			} 
			// 2 word phrase match 
			if ($i+1 < $wordCount){
				$keywordsSorted1 .= $keywordsArray[$i].' '.$keywordsArray[$i+1].',';
			} 
			// 3 word phrase match 
			if ($i+2 < $wordCount){
				$keywordsSorted2 .= $keywordsArray[$i].' '.$keywordsArray[$i+1].' '.$keywordsArray[$i+2].',';			
			} 
			// 4 word phrase match 
			if ($i+3 < $wordCount){
				$keywordsSorted3 .= $keywordsArray[$i].' '.$keywordsArray[$i+1].' '.$keywordsArray[$i+2].' '.$keywordsArray[$i+3].',';
			} 
		}
		
		for ($i = 0; $i <= 3; $i++){
		
			// Build array form string. 
			${'keywordsSorted'.$i} = array_filter(explode(',', ${'keywordsSorted'.$i}));			
			${'keywordsSorted'.$i} = array_count_values(${'keywordsSorted'.$i});
			asort(${'keywordsSorted'.$i});
			arsort(${'keywordsSorted'.$i});	
			
			foreach (${'keywordsSorted'.$i} as $key => $value){
				${'keywordsSorted'.$i}[$key] = array($value, number_format((100 / $wordCount * $value),2));		
			}
		}	
		// return array
		
		return array($keywordsSorted0, $keywordsSorted1, $keywordsSorted2, $keywordsSorted3,$wordCount);
	}
    private function multikeyword($wordString){
                // Filter words array 
                // You can add more words you like to filter
                $filterwordsArray = array(
                " a ", " about ", " above ", " above ", " across "); 

                // Remove filter words form input and count the number of removed words
             
         
                if (!mb_detect_encoding($wordString, 'UTF-8', true) || false === mb_check_encoding($wordString, 'UTF-8'))
                $wordStringFiltered = str_replace($filterwordsArray, ' ',  utf8_encode($wordString), $replaceCount);
		else
 $wordStringFiltered = str_replace($filterwordsArray, ' ',  $wordString, $replaceCount);
//$wordStringFiltered = ($wordStringFiltered);
                // Count the number of words found within the filtered words string (input), returns an array
                $keywordsArray = str_word_count($wordStringFiltered, 1,'ÄäÖöÜüß');
                  
                // Count the number of words found within the filtered words string (input), returns a string
                $wordCount = str_word_count($wordStringFiltered, 0,'ÄäÖöÜüß');
              //  echo $wordCount;
                return $this->keywordSorting($keywordsArray, $wordCount);
    }
    // -------------------------------------------------------------------
    // Private Function to calculate the keyword density from plain text
    // -------------------------------------------------------------------
    private function calcDensity(){   
      // -------------------------------------------------------------------
      // Prepare string
      // -------------------------------------------------------------------
       $plainText=$this->plainText();
      
        $keywords=$this->multikeyword($plainText);
		
        return $keywords;
      
    } // End of private function calcDensity
// -------------------------------------------------------------------
// PUBLIC FUNCTION
// -------------------------------------------------------------------
    // -------------------------------------------------------------------
    // Public Function to return the keyword density result array
    // -------------------------------------------------------------------
    public function result(){

      return $this->calcDensity();      

    } // End of function KD
} // End of class 
function get_title_and_links($url){
  $returnData=array();
	if (false === mb_check_encoding(file_get_contents($url), 'UTF-8'))
  $str = utf8_encode(file_get_contents($url));
	else
	$str = file_get_contents($url);	
  $urlPassed=parse_url($url);
  
  if(strlen($str)>0){
$returnData['tags']['h1']=getTextBetweenTags($str, "h1");
$returnData['tags']['h2']=getTextBetweenTags($str, "h2");
$returnData['tags']['h3']=getTextBetweenTags($str, "h3");
$returnData['tags']['h4']=getTextBetweenTags($str, "h4");
$returnData['tags']['h5']=getTextBetweenTags($str, "h5");
$returnData['tags']['h6']=getTextBetweenTags($str, "h6");

$dom = new DOMDocument;
@$dom->loadHTML(mb_convert_encoding($str, 'HTML-ENTITIES', 'UTF-8'));
//$images = explode('<img ',$str);

$images = $dom->getElementsByTagName('img');

$returnData['imagesTotal']=$images->length;
foreach ($images as $image){
    $returnData['imageTitle'][]=$image->getAttribute('title');
    $returnData['imageAlt'][]=$image->getAttribute('alt');
}
$links = $dom->getElementsByTagName('a');

//Iterate over the extracted links and display their URLs
foreach ($links as $link){
    //Extract and show the "href" attribute.
    $returnData['links'][$link->nodeValue]=$link->getAttribute('href');
    //
    if($link->getAttribute('href')=="/" || $link->getAttribute('href')=="#"){
        $returnData['inboundlinks'][]=$link->getAttribute('href');
    }else{
        $urlParsed=parse_url($link->getAttribute('href'));
        if(!isset($urlParsed['host'])){
             $returnData['inboundlinks'][]=$link->getAttribute('href');
        }else{
            if($urlPassed['host']==$urlParsed['host']){
                $returnData['inboundlinks'][]=$link->getAttribute('href');
            }else{
                $returnData['outboundlinks'][]=$link->getAttribute('href');
            }
        }
    }
    $returnData['linkTitle'][]=$link->getAttribute('title');
}
$titleStr = $dom->getElementsByTagName('title');

foreach ($titleStr as $title)
{               
    $returnData['pagetitle']=$title->nodeValue;
}
    
  }
  return $returnData;
}

function get_meta_data($url, $searchkey='') {
    $str='';
    $metaData=array();
    $doc = new DomDocument();
    ini_set('default_charset', 'utf-8');

	@$doc->loadHTML(mb_convert_encoding($url, 'HTML-ENTITIES', 'UTF-8'));
    $xpath = new DOMXPath($doc);
    $query = '//*/meta[starts-with(@property, \'og:\')]';
    $metas = $xpath->query($query);
    foreach ($metas as $meta) {
        $property = $meta->getAttribute('property');
         $content = $meta->getAttribute('content');
        $metaData[$property]=$content;
    }
	
    $data = get_meta_tags($url, TRUE ); // get the meta data in an array
	

    foreach($data as $key => $value) {
        // check whether the content is UTF-8 or ISO-8859-1
        if(mb_detect_encoding($value, 'UTF-8, ISO-8859-1', true) != 'ISO-8859-1') {
          if($key!='description'){
			  if (false === mb_check_encoding($value, 'UTF-8'))
              $value = utf8_encode($value); 
			  else
			  $value = utf8_decode($value);// if UTF-8 decode it
            }
        }
        $value = strtr($value, get_html_translation_table(HTML_ENTITIES));  // mask the content
        if($searchkey != '') {
            // if only one meta tag is in demand e.g. 'description'
            if($key == $searchkey) {
                $str = $value; // just return the value
            }
        } else { // all meta tags
            $pattern = '/ |,/i';    // ' ' or ',' 

            // split it in an array, so we have the count of words
            $array = preg_split($pattern, $value, -1, PREG_SPLIT_NO_EMPTY);            // format data with count of words and chars
            /* $str .= '<p><span style="display:block;color:#000000;font-weight:bold;">' . $key .
                    ' <span style="font-weight:normal;">(' . count($array) . ' words | ' .
                    strlen($value) . ' chars)</span></span>' . $value . '</p>'; */
			$metaData[$key]=$value;
        }
    }
	
    return $metaData;
}
function getTextBetweenTags($string, $tagname){
    global $lin;
    $d = new DOMDocument();
	
    @$d->loadHTML(mb_convert_encoding($string, 'HTML-ENTITIES', 'UTF-8'));
    $return = array();
    foreach($d->getElementsByTagName($tagname) as $item){
        $return[$lin] = $item->textContent;
        $lin++;
    }
    return $return;
}

?>