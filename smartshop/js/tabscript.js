$(document).ready(function(){
$('#info').tabs({
  event: 'mouseover',
  fx: {
    opacity: 'toggle',
    duration: 'slow'
  },
  spinner: 'Loading...',
  cache: true
});
});
