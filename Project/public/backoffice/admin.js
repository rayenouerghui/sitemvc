// Backoffice wrapper - can load admin-specific code or reuse central script
(function(){
  var s = document.createElement('script');
  s.src = '/assets/js/script.js';
  s.async = false;
  document.head.appendChild(s);
})();
