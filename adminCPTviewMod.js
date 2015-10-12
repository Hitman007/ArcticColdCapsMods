jQuery('document').ready(function() {
  jQuery("#the-list tr").each(function() {
    var val = jQuery('#' + jQuery(this).attr("id") + ' input').val();
    
    alert(val);
    if(val === "UserID") {
      alert("FOUND!");
    }
    //jQuery('body.post-type-infoform span#view-post-btn a').html("View Info");
  
  });
});
