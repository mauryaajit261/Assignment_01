function data ()

{
  var a = document.getElementById("n1").value; 
  var b = document.getElementById("n2").value;
  var c = document.getElementById("n3").value;
  var d = document.getElementById("n4").value;
  var e = document.getElementById("n5").value;
  var f = document.getElementById("n6").value;
  var g = document.getElementById("n7").value;

    if (a == "" || b=="" || c=="" || d=="" || e=="" || f=="" || g=="" )
    {
        alert("All fields are required!");
        return false;
    }

    // it is used when we add any conatct number and wants the correct contact no 
    // else if  ( n.length < 10 || n.length>10)
    //     {
    //         alert("conatct number should be of 10 digits only");
    //         return false;
    //     }
    // else if  (isNaN(n))
    //         {
    //             alert("only number allowed in it okay!");
    //             return false;
    //         }
    else{
        true;
    }
}