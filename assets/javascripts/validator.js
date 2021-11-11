class Validator {
    // class methods
    constructor(){}
  
    validateFullName(name){
        var fullName;
        
        fullName = name.split(" ");
        
        console.log(fullName);
        
        if(!fullName || fullName.length < 2 || fullName == ""){
            return false;
        }
        
        return true;
    }

    validatePhoneNumber(number){
        if(number.length < 10){
            return false;
        }
        var regexPattern=new RegExp(/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g);    // regular expression pattern
        return regexPattern.test(number); 
    } 
    
    validateEmailAddress(email) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(email);
    }

}