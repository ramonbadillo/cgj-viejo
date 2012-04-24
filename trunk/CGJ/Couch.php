<?php
include("CouchSimple.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Couch{
	      
        public static function delete($uri){
         
            $opciones['host'] = "localhost"; 
            $options['port'] = 5984; 
            
            $couch = new CouchSimple($options); // See if we can make a connection
            $resp = $couch->send("DELETE", "/"+$uri+"/"); 
            var_dump($resp); // string(12) "{"ok":true}"
        }
        
        public static function get($uri){
         
            $opciones['host'] = "localhost"; 
            $options['port'] = 5984; 
            
            $couch = new CouchSimple($options); // See if we can make a connection
            $resp = $couch->send("DELETE", "/"+$uri+"/"); 
            var_dump($resp); // string(12) "{"ok":true}"
        }

    }
  
?>


def get(uri)
      request(Net::HTTP::Get.new(uri))
    end

    def put(uri, json)
      req = Net::HTTP::Put.new(uri)
      req["content-type"] = "application/json"
      req.body = json
      request(req)
    end

    def post(uri, json)
      req = Net::HTTP::Post.new(uri)
      req["content-type"] = "application/json"
      req.body = json
      request(req)
    end

    def request(req)
      res = Net::HTTP.start(@host, @port) { |http|http.request(req) }
      unless res.kind_of?(Net::HTTPSuccess)
        handle_error(req, res)
      end
      res
    end

    private

    def handle_error(req, res)
      e = RuntimeError.new("#{res.code}:#{res.message}\nMETHOD:#{req.method}\nURI:#{req.path}\n#{res.body}")
      raise e
    end
  end
end