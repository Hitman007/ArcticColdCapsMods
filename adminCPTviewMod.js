jQuery('document').ready(function() {
  jQuery("#the-list tr").each(function() {
    var val = jQuery('#' + jQuery(this).attr("id") + ' input').val();

    if(val === "UserID") {
      var meta = jQuery(this).attr("id");
      var user_id = jQuery('#' + meta + ' textarea#' + meta + '-value').html();
      
    
      var protocol = window.location.protocol;
      var hostname = window.location.hostname;
      var url = protocol + "//" + hostname + "/info-sheet/?user=" + user_id;
      jQuery('span#sample-permalink').html(url);
      jQuery('span#view-post-btn a').attr('href', url);
      jQuery('span#edit-slug-buttons').hide();
    }
    //jQuery('body.post-type-infoform span#view-post-btn a').html("View Info");
  
  });
});
