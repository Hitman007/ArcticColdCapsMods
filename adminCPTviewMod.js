jQuery('document').ready(function() {
  jQuery("#the-list tr").each(function() {
    var val = jQuery(this + ' input').val();
    
    if(val === "UserID") {
      alert("FOUND!");
    }
    //jQuery('body.post-type-infoform span#view-post-btn a').html("View Info");
  
  });
});
