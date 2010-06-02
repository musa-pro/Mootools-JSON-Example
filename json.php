<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JSON Example</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.4/mootools.js"></script>
	
  <script type="text/javascript">
	window.addEvent('domready', function() {
 
  
   $(document.body).getElement('input[name=searchuser]').addEvents({
                                        
                                        'keydown' : function(){
                                                if (this.get('value') != '')
                                                {
                                                      var jsonRequest = new Request.JSON({url: "query_user_details.php", 
                                                      onComplete: function(person){
                                                    //      alert(person);    //Alerts "25 years".
                                                          $(document.body).getElement('input[name=email]').set('value', (person.email));
                                                          $(document.body).getElement('input[name=username]').set('value', (person.username));
                                                                                                                    
                                                      }}).get({'fullname': this.get('value')});

                                                }
                                        }
    }); 


 
  });
  </script>


	

</head>
<body>

 <p><input type="text" name="searchuser" id="searchuser" value="click here"/></p>
 <p>User Name: <input type="text" name="username" /></p>
 <p>Email: <input type="text" name="email" /></p>

</body>
</html>