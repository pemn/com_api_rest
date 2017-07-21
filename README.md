# com_api_rest
Joomla! com_api component plugin boiler plate for a custom RESTful service

## Description

This is a minimal plugin for the Joomla! component com_api. It provices RESTful funcionality to expose Joomla! internal objects.

## Examples

First thing you need to create a Key (access token to authorize the requests) in Joomla!:  
`Components > Api > Api Keys > New`  

Use this key in the resource call or if testing manually just replace it in the urls (`:key` in the examples).


 - GET  
   http://recursos01/joomla/index.php?option=com_api&format=raw&key=:key&app=rest&resource=list  
   result:  
   {"success":true,"data":"GET","message":"ok"}  
 - GET  
   http://recursos01/joomla/index.php?option=com_api&format=raw&key=1234567890&app=rest&resource=list  
   result:  
   {"success":true,"data":"GET","message":"ok"}  
 - POST  
   http://recursos01/joomla/index.php?option=com_api&format=raw&key=:key&app=rest&resource=list  
   result:  
   {"success":true,"data":"POST","message":"ok"}  
   
