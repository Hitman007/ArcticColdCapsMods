jQuery('document').ready(function() {
  jQuery("#the-list tr").each(function() {
    var val = jQuery('#' + jQuery(this).attr("id") + ' input').val();

    if(val === "UserID") {
      var meta = jQuery(this).attr("id");
      var user_id = jQuery('#' + meta + ' textarea#' + meta + '-value').html();
      var pathname = window.location.pathname; // Returns path only
      var url      = location.host;     // Returns full URL
      alert(pathname + " & " + url);
    }
    //jQuery('body.post-type-infoform span#view-post-btn a').html("View Info");
  
  });
});
