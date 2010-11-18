YUI().use('io','node',function(Y){
 
    Y.on('submit', function(event){
       
      Y.io('validate.php',{
           method: 'POST',
           data: 'name=' + Y.one('#name').get('value') +  
                 '&email=' + Y.one('#email').get('value') + 
                 '&homepage=' + Y.one('#homepage').get('value') + 
                 '&message=' + Y.one('#message').get('value') + 
                 '&done=done'
      });  

      //prevent default 
      event.preventDefault();

    },'#mainform');

    var success = function(id, o) {

        if(o.responseText !== undefined) {
           //success case
           Y.one('#mainform').set('innerHTML', o.responseText);
            if(Y.one('#mainform span.error')){
              var fieldID = Y.one('#mainform span.error').ancestor('label').get('htmlFor');
              Y.one('#' + fieldID).focus();
            }
        }  
    };

    var failure = function() {

        if(o.responseText !== undefined) {
           Y.one('#mainform').submit(); 
           //failure case
        }
    };

    Y.on('io:success', success); 
    Y.on('io:failure', failure);
});