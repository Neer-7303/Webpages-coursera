(function(window) {
  var helloSpeaker = new function() {
  }
  var speakWord = "Hello";

  helloSpeaker.speak = function (name) {
    console.log(speakWord + " " + name);
  }
  
   window.helloSpeaker = helloSpeaker;
})(window);