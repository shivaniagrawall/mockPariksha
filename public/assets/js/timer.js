$(function(){
  $('.timer').startTimer({
    onComplete: function(element){
      alert('Test Time completed');

window.close();
    }
  
  });
});

