/*var black = $('#black_button');
button.click(function(event) {
    execute_this();
    document.body.style.backgroundColor = "black";
  });*/ //J-query

var button = document.getElementById('black_button');
button.addEventListener("click", function(event) {
document.body.style.backgroundColor = "black";
});

var button2 = document.getElementById('white_button');
button2.addEventListener("click", function(event) {
document.body.style.backgroundColor = "white";
});

var button3 = document.getElementById('pink_button');
button3.onclick=function(){
document.body.style.backgroundColor = "pink";
};

var button4 = document.getElementById('silver_button');
button4.onclick=function(){
document.body.style.backgroundColor = "silver";
};


//////////////////////////////////////////////////////////


button.addEventListener("click", function() {
    document.body.style.color = "white";
});


button2.addEventListener("click", function() {
    document.body.style.color = "black";
});    

button3.addEventListener("click", function() {
    document.body.style.color = "green";
});    

button4.addEventListener("click", function() {
    document.body.style.color = "yellow";
}); 
