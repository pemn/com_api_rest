# com_api_rest
Joomla! com_api component plugin boiller plate

## Description

This is a minimal plugin for the Joomla! component com_api. It provices RESTful funcionality to expose Joomla! internal objects.

## Examples

 - GET  
   http://recursos01/joomla/index.php?option=com_api&format=raw&key=:key&app=rest&resource=list  
   result:  
   {"success":true,"data":"GET","message":"ok"}  
 - POST
   http://recursos01/joomla/index.php?option=com_api&format=raw&key=:key&app=rest&resource=list  
   result:  
   {"success":true,"data":"POST","message":"ok"}  
   
