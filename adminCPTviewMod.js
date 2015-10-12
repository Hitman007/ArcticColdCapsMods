jQuery('document').ready(function() {
  jQuery("#the-list tr").each(function() {
    var val = jQuery('#' + jQuery(this).attr("id") + ' input').val();

    if(val === "UserID") {
      var meta = jQuery(this).attr("id");
      var user_id = jQuery('#' + meta + ' textarea#' + meta + '-value').html();
      
    
      var protocol = window.location.protocol;
      var url      = window.location.hostname;
      alert(protocol + "//" + url + "/?user=" + user_id);
    }
    //jQuery('body.post-type-infoform span#view-post-btn a').html("View Info");
  
  });
});
