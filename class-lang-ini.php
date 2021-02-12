<?php

# The MIT License
###############################
# @version class_lang v1.0
# Copyright (c) 2014 Adam Berger
# <ber34#o2.pl>
# Copyright (c) 2014 Class Language
###############################
#Permission is hereby granted, free of charge, to any person obtaining a copy
#of this software and associated documentation files (the "Software"), to deal
#in the Software without restriction, including without limitation the rights
#to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
#copies of the Software, and to permit persons to whom the Software is
#furnished to do so, subject to the following conditions:
###############################
#The above copyright notice and this permission notice shall be included in
#all copies or substantial portions of the Software.
###############################
#THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
#IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
#FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
#AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
#LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
#OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
#THE SOFTWARE.
##############################


 
class class_lang{
  
   private $whatlang;
   private $lang = array(1=>"pl", 2=>"en", 3=>"cz", 4=>"br");
   private $lang_tabl = array();
   private $pl = array();
        
  
    public function __construct($whatlangg, $file){
           if(file_exists($file)){
            $this->lang_tabl = parse_ini_file($file, true);
           }else{
             die("Brak Pliku lang.ini");
           }
           if(!empty($whatlangg)){
           $this->whatlang = $this->lang[(int)$whatlangg];
           }else{
            die("Brak okreslonego jezyka");
           }
      }

    private function lang(){
        if(!empty($this->whatlang)){
         return $this->whatlang;
        }else{
         return "pl";
        }
    }
   
    private function multi_lang($param){
      $this->pl = $this->lang_tabl[$param];
    }

    private function get_multi_lang(){
        return $this->pl;
    }
   
    public function _lang($langgg){
           $this->multi_lang($this->lang());
           if($lan = $this->get_multi_lang()){
               return $lan[$langgg];
           }
     }
     
}
